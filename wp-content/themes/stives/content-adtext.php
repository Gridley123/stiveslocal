<?php
    $advertising_heading_text = get_field('advertising_heading_text');
    $rate_card_image = get_field('rate_card_image');
    $advertising_text = get_field('advertising_text');
    
?>
      <!-- === advertising text section === {{{2 --!>
        <section class="advertising-text">
        <h1><?php echo $advertising_heading_text; ?></h1>
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                    
                    <p class="adtextpara"><?php echo $advertising_text; ?></p>
                   <div>
                        <img class="clickhere"
                        src="<?php bloginfo('stylesheet_directory'); ?>/images/anchor-logo-clickhere-contact.png"
                        alt="anchor logo click here for contact">
                    </div>
                    <figure class="adtextfig">
                    <img class="adtextimg" src="<?php echo $rate_card_image; ?>"
                        alt="rate card for march 2016">
                        <figcaption class="adtextfigcapt">click to view a larger
                        size image</figcaption>
                    </figure>
                    </div>
                </div>
            </div>
                
        </section>    
