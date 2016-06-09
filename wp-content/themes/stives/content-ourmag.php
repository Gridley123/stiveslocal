<?php
    $overview_sub_heading = get_field('overview_sub_heading');
    $overview_text = get_field('overview_text');
    $overview_image = get_field('overview_image');
    $local_advertising_text = get_field('local_advertising_text');
?>

      <!-- === OUR MAGAZINE SECTION {{{3 === -->

        <section class="ourMag">
          <div class="container">

          <!-- ===WELCOME=== {{{4 -->
            <div class="row">
              <div class="overview overview1 col-sm-5">
                <div class="alignPara">
                  <h1>Welcome to <img src="<?php bloginfo('stylesheet_directory'); ?>/images/StIvesLocalBrand.svg"
                  alt="St Ives Local Brand"><br><span><?php echo $overview_sub_heading ?></span></h1>
                      <p><?php echo $overview_text; ?></p>
                  <img class="overviewClick"
                  src="<?php bloginfo('stylesheet_directory'); ?>/images/anchor-logo-clickhere.png" alt="anchor logo
                  Click Here">
                </div>
              </div>

              <div class="overviewpicture overviewpicture1 col-sm-7" style="background-image: url(<?php echo $overview_image ?>)">

              </div>
            </div>

            <!-- === QUALITY LOCAL ADVERTISING=== {{{4 -->
            <div class="row">
              <div class="overviewpicture overviewpicture2 col-sm-7">
              </div>

              <div class="overview overview2 col-sm-5">
                <div class="alignPara">
                  <h1><span>Quality Local Advertising</span></h1>
                  <p><?php echo $local_advertising_text ?></p>
                   <img class="overviewClick"
                   src="<?php bloginfo('stylesheet_directory'); ?>/images/anchor-logo-clickhere.png" alt="anchor logo
                   Click Here">
                </div>
              </div>
            </div>

            <!-- ===PRIZE WINNING PUBLICATION=== {{{4 -->
            <div class="row">
              <div class="overview overview3 col-sm-5">
                  <div class="alignPara">
                    <h1><span>Prize Winning Publication</span></h1>
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/award.jpg" alt="Runner Up Best New
                    Magazine Award">
                  </div>
                </div>
                <div class="overviewpicture overviewpicture3 col-sm-7">
                </div>
              </div>
            </div><!-- container -->

        </section> <!-- .ourMag -->
