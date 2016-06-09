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
            
            $output_json = encode_output_json();
            print_r($output_json);
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


?>
