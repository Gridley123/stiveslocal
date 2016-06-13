<?php
print output(extractAll(xml()));
    function xml() {
        $xml = simplexml_load_file("https://www.tidetimes.org.uk/st-ives-tide-times.rss");
        $description = $xml->channel->item->description;
        return $description;
    }

    function extractAll($inputstring){
        $timespat = '#\d\d:\d\d#';
        preg_match_all($timespat, $inputstring, $times );
        print(var_dump($times));

        $tidepat = '#\d.\d\dm#';
        preg_match_all($tidepat, $inputstring, $tides);
        print(var_dump($tides));

        $typepat = '#(\w{3,4}\s)Tide#';
        preg_match_all($typepat, $inputstring, $type );
        print(var_dump($type));
        return array($type[1], $times[0], $tides[0]);
    }
    
    function checkArrayLength($array){
        return $array.length;
    }

    function output($a){
    $html = '';
         for($i=0; $i <= count($a); $i++){
             $html = $html.
                '<span><i class='.$a[0][$i].'></i></span>
                <span>'.$a[1][$i].'</span>
                <span>'.$a[2][$i].'</span>';
         }
    return $html;
    }

    
?>
