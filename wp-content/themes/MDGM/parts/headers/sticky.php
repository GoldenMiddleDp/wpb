<header class="header" role="banner" style="background: url(<?php //echo esc_url( get_header_image() ); ?>) no-repeat center/cover;" data-uk-sticky="{top:-200, animation: 'uk-animation-fade'}">
  <div class="uk-container uk-container-center uk-height-1-1">
    <div class="uk-grid uk-grid-small uk-height-1-1" >
      <div class="uk-width-small-1-2 uk-width-medium-1-6 uk-height-1-1" id="logo">
        <!-- logo -->
        <div class="logo uk-height-1-1">
          <div class="uk-vertical-align uk-height-1-1">
            <div class="uk-vertical-align-middle uk-width-1-1">
                <a href="<?php echo home_url(); ?>">
                  <!-- svg -->
                  <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" width="200px;" class="logo-img">
                </a>
                <a href="#mobile-menu" class=" lnr-menu uk-icon-large uk-float-right uk-visible-small" id="mob-menu" data-uk-offcanvas></a>

            </div>
          </div>
        </div>
        <!-- /logo -->
         <?php get_header(); ?>
      </div>
      <div class="uk-width-small-1-2 uk-width-medium-4-6  uk-height-1-1 uk-text-center" id="mob-menu">
        <!-- nav -->
         <div class="uk-vertical-align uk-height-1-1 uk-hidden-small">
            <div class="uk-vertical-align-middle uk-width-1-1">
              <nav class="nav uk-width-1-1" role="navigation">
                <?php
                wp_nav_menu( array(
                  'menu'              => 'primary',
                  'theme_location'    => 'primary',
                  'depth'             => 2,
                  'container'         => '',
                  'menu_class'        => 'uk-navbar-nav uk-hidden-small uk-width-1-1',
                  'fallback_cb'       => 'basey_primary_menu::fallback',
                  'walker'            => new basey_primary_menu())
                );
                ?>
              </nav>
            </div>
        </div>


        <!-- /nav -->
      </div>
      <div class="uk-width-small-1-1 uk-width-medium-1-6 uk-text-right uk-height-1-1">
        <div class="uk-vertical-align uk-height-1-1 uk-hidden-small">
            <div class="uk-vertical-align-middle">
              <?php if( class_exists( 'WooCommerce' ) ){ ?>
                <a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo sprintf (_n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> - <?php echo WC()->cart->get_cart_total(); ?></a>
              <?php } else { ?>
                   <a href="#contmod" data-uk-modal="{center:true}" class="uk-button">Hello</a>
              <?php }; ?>
            </div>
        </div>
      </div>
    </div>
  </div>
</header>
