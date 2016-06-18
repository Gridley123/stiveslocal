<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');
function theme_enqueue_scripts(){

	wp_register_script('modernizr', get_bloginfo('template_url') . '/js/modernizr.js');
	wp_enqueue_script('modernizr');

	wp_register_script('require', get_bloginfo('template_url') . '/js/vendor/requirejs/require.js', array(), false, true);
	wp_enqueue_script('require');

	wp_register_script('global', get_bloginfo('template_url') . '/js/global.js', array('require'), false, true);
	wp_enqueue_script('global');

	wp_register_script('livereload', 'http://localhost:35729/livereload.js?snipver=1', null, false, true);
	wp_enqueue_script('livereload');

	wp_enqueue_style('global', get_bloginfo('template_url') . '/css/global.css');

	wp_register_script('optimized', get_bloginfo('template_url') . '/js/optimized.min.js', array('require'), false, true);
	wp_enqueue_script('optimized');

	wp_register_script('mainjs', get_bloginfo('template_url') . '/js/main.js', array('require'), false, true);
	wp_enqueue_script('mainjs');
        
}
//output Tides to TideBar
function createTideBar() {

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
    
    $output = output(extractAll(xml()));
    echo $output;
}
//Add Featured Image Support
add_theme_support('post-thumbnails');

// Clean up the <head>
function removeHeadLinks() {
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');
}
add_action('init', 'removeHeadLinks');
remove_action('wp_head', 'wp_generator');

function register_menus() {
	register_nav_menus(
		array(
			'main-nav' => 'Main Navigation',
			'secondary-nav' => 'Secondary Navigation',
			'sidebar-menu' => 'Sidebar Menu'
		)
	);
}
add_action( 'init', 'register_menus' );

function register_widgets(){

	register_sidebar( array(
		'name' => __( 'Sidebar' ),
		'id' => 'main-sidebar',
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

}//end register_widgets()
add_action( 'widgets_init', 'register_widgets' );
