
  <!-- === HEADER SECTION (BRAND, NAVBAR) {{{2 === -->

      <header class="site-header" role="banner">

        <nav class="navbar navbar-default" role="navigation">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

          </div>

        <?php wp_nav_menu(array(
                'theme_location' => 'main-nav',
                'container'      => 'div',
                'container_class'   => 'collapse navbar-collapse navbar-ex1-collapse',
                'menu_class' => 'nav navbar-nav',
        )) ?>

      </header>
