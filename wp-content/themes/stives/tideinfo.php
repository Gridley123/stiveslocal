<?php
    date_default_timezone_set('Europe/London');


     $GLOBALS['midnight']=  strtotime('midnight');
     $GLOBALS['tomorrow']=  strtotime('tomorrow');

    if(getCache()){
        $timesArray = extractTimes(getCache());
        $expired_times_array = array_filter($timesArray, 'checkEachTime');
        if ($expired_times_array){
            refreshCache();
        } else {
            outputData(2, 'height');
            refineData(extractExtremes(getCache()));
        }
    } else {
        refreshCache();
    };

    //Retrieve cached worldtiede API response from WP Options database
    function getCache(){
        return get_option('option_tide_cache');
    }

    //Extract the times of high and low tides from the API response and put in
    //return an array of these (in unix epoch format)
    function extractTimes($tide_json){
        $dates = [];
        $extremes = extractExtremes($tide_json);
        foreach($extremes as $object){
            array_push($dates, $object->dt);
        };
        return($dates);
    }

    //Check each time to make sure they fall within the current day, returning 
    //true if not and false if so.
    function checkEachTime($date) {
           if (($date < $GLOBALS['midnight']) or ($date > $GLOBALS['tomorrow'])){
               return true;
           } else {
                return false;
           }
    };
    
    //Refresh the cached API response, by calling the worldtide API again and
    //updating the WP Options database.
    function refreshCache(){
        print $GLOBALS['midnight'];
        $url = 'http://www.worldtides.info/api?extremes&key=579ab667-b29d-47c2-a34f-4495e1905fa6&lat=50.208&lon=-5.491&start='.$GLOBALS['midnight'].'&length=86400';
        print 'url: '.$url.' .';
        $tideresponse = file_get_contents($url);
        return update_option('option_tide_cache', $tideresponse);
    }

   //Take cached JSON and extract only the high/low tide data 
    function extractExtremes($tide_data_json){
       $decoded = json_decode($tide_data_json);
       return $decoded->extremes;
    }

    //Encode json file with only high/low tides and times for use in JS
    function encode_output_json(){
      return json_encode(extractExtremes(getCache()));
    }

    function outputData($index, $key) {
        $decoded = extractExtremes(getCache());
        if ($decoded) {
            if ($decoded[$index]) {
                echo $decoded[$index]->$key;
            }
        }
    }
    xml();
    
    function xml() {
        $xml = simplexml_load_file("https://www.tidetimes.org.uk/st-ives-tide-times.rss");
        print('xml: '. var_dump($xml));
    }
    
    function refineData($extremesarray) {
        print(var_dump($extremesarray));
        foreach ($extremesarray as &$object) {
            foreach($object as $key=>&$value){
                switch ($key) {
                    case "dt":
                        $value = date('H:i', $value);
                        print 'dt';
                        break;
                    case "height":
                        $value = round($value, 2);
                        break;
                    case "type":
                        if($value == "High"){
                            $value = "fa-arrow-up";
                        } else {
                            $value = "fa-arrow-down";
                        } 
                        break;
                }
            }
            
        }
        
        print(var_dump($extremesarray));

    }

?>
