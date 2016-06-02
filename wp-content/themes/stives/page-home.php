
<?php 
/*
  Template Name: Home Page
 */
?>

<!-- === LANDING PAGE SECTION {{{2 === -->
      <div class="landing">
        <div class="tides">
          <div class="container tidecontainer">
            <div class="tidedata">
              <p>
                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/anchor-logo.svg" alt="ANCHOR" id="brand">
                <span>TIDES</span>
                <span><i class="fa fa-arrow-up"></i></span>
                <span class="hightide1">12:06</span>
                <span class="hightide2"></span>
                <i class="fa fa-arrow-down"></i>
                <span class="lowtide1">06:01 </span><span class="lowtide2">| 18:44</span>
              </p>
            </div><!-- /.tidedata -->
          </div>
        </div>
        <div id="expand">
          <img id='anchor' src="<?php bloginfo('stylesheet_directory'); ?>/images/anchor-logo-original-white-bg.png"
          alt="anchor logo">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/images/fadeInHeader.svg"  id="fadeInHeader" alt="anchor logo">
        </div>
        <div class="infoLogobg"><!-- <img src="<?php bloginfo('stylesheet_directory'); ?>/images/infoLogo.svg"
        id="infoLogo"> --> <img id="clickhere" alt="anchor Click Here logo"
            src="<?php bloginfo('stylesheet_directory'); ?>/images/anchor-logo-clickhere-contact.png" ></div>
      </div>
<?php get_header(); ?>
<?php get_footer(); ?>
