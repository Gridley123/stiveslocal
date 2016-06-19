<?php $facebook_feed = get_field('facebook_feed'); ?>
        <!-- === FACEBOOK FEED SECTION {{{3 === -->

        <section class="facebook">
          <div class="container">
            <div class="icon">
                <i class="fa fa-facebook fa-3x"></i>
            </div>
            <div class="fbplugin">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="facebook-feed">
                            <?php echo $facebook_feed;?>
                        </div>
                    </div>
                </div>
            </div><!-- /.fbplugin -->
          </div><!-- /.container -->
        </section><!-- /.facebook -->
      </main>

