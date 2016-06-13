<?php
$GLOBALS['output'] =  output(extractAll(xml()));
// print var_dump($GLOBALS['output']);
    function xml() {
        $xml = simplexml_load_file("https://www.tidetimes.org.uk/st-ives-tide-times.rss");
        $description = $xml->channel->item->description;
        return $description;
    }

    function extractAll($inputstring){
        $timespat = '#\d\d:\d\d#';
        preg_match_all($timespat, $inputstring, $times );

        $tidepat = '#\d.\d\dm#';
        preg_match_all($tidepat, $inputstring, $tides);

        $typepat = '#(\w{3,4})\sTide#';
        preg_match_all($typepat, $inputstring, $type );
  //      print var_dump (array($type[1], $times[0], $tides[0]));
        
        return array($type[1], $times[0], $tides[0]);

        
    }

    function output($a){
    $html = '';
         for($i=0; $i <= count($a); $i++){
             $class = '';
             if ($a[0][$i]=='High') {
                $class = '"fa fa-arrow-up"';
             } else {
                $class = '"fa fa-arrow-down"';
             }
             $html = $html.
                '<span class="tideextreme"><span><i class='.$class.'></i></span>
                <span>'.$a[1][$i].' |</span>
                <span>'.$a[2][$i].'</span></span>';
         }
    return $html;
    }

    
?>
