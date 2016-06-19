<?php
    /**
     * Template Name: Advertise Page
     */
?>
<?php get_header() ?>
if ( have_posts() ) {
    while ( have_posts() ) {
        the_post();
        the_content();    
    }
} else {
    
}

wp_reset_postdata();
<?php get_footer() ?>

