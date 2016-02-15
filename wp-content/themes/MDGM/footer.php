<?php
	$theme_options_options = get_option( 'theme_options_option_name' ); // Array of All Options
	$phone_number_one_0 = $theme_options_options['phone_number_one_0']; // Phone number one
	$phone_number_two_1 = $theme_options_options['phone_number_two_1']; // Phone number two
	$phone_number_three_2 = $theme_options_options['phone_number_three_2']; // Phone number three
	$email_address_3 = $theme_options_options['email_address_3']; // Email address
	$address_4 = $theme_options_options['address_4']; // Address
	$front_heading_5 = $theme_options_options['front_heading_5']; // Front heading
	$front_subheading_6 = $theme_options_options['front_subheading_6']; // Front subheading
	$seo_heading_7 = $theme_options_options['seo_heading_7']; // Seo heading
	$seo_content_8 = $theme_options_options['seo_content_8']; // Seo content
?>
</div>
<footer class="" role="contentinfo">
				<div class="uk-container uk-container-center">
					<div class="uk-grid uk-margin-top">
					<div class="uk-width-small-1-1 uk-width-medium-1-4 uk-margin-bottom">
					<h3>Контактная информация:</h3>
					<address>
						<p>
							<a href="tel:<?php echo $phone_number_one_0; ?>" ><?php echo $phone_number_one_0; ?></a><br>
							<a href="tel:<?php echo $phone_number_two_1; ?>" ><?php echo $phone_number_two_1; ?></a><br>
							<a href="tel:<?php echo $phone_number_three_2; ?>" ><?php echo $phone_number_three_2; ?></a>
						</p>
						<p>
							<a href="mailto:<?php echo $email_address_3; ?>" ><?php echo $email_address_3; ?></a>
						</p>
						<p>
							<?php echo $address_4; ?>
						</p>
					</address>
						
					</div>
					<div class="uk-width-small-1-1 uk-width-medium-1-4 uk-margin-bottom uk-hidden-small">
						<h3>Меню:</h3>
						<?php
                      wp_nav_menu( array(
                        'menu'              => 'primary',
                        'theme_location'    => 'primary',
                        'depth'             => 2,
                        'container'         => '',
                        'menu_class'        => 'uk-navbar-nav uk-hidden-small',
                        'fallback_cb'       => 'basey_primary_menu::fallback',
                        'walker'            => new basey_primary_menu())
                      );
                      ?>
					</div>
					<div class="uk-width-small-1-1 uk-width-medium-1-4 uk-margin-bottom">
						<h3>Мы в социальных сетях:</h3>
						<ul class="social">
							<li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/social/facebook-48-black.png" alt=""></a></li>
							<li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/social/googleplus-48-black.png" alt=""></a></li>
							<li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/social/instagram-48-black.png" alt=""></a></li>
							<li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/social/twitter-48-black.png" alt=""></a></li>
							<li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/social/vk-48-black.png" alt=""></a></li>
						</ul>
					</div>
					<div class="uk-width-small-1-1 uk-width-medium-1-4 uk-margin-bottom uk-text-right">

						<div class=""><?php get_template_part('searchform'); ?></div>
						<p class="copyright uk-margin-top">
							&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>
						</p>
						<!-- /copyright -->
					</div>
						<!-- copyright -->

					</div>
				</div>
			</footer>
			<!-- /footer -->
            <div class="back-to-top" data-uk-scrollspy="{initcls:'init-top', cls:'uk-animation-fade', topoffset:1200}">
            	<a href=".wrapper" data-uk-smooth-scroll><span class="icon-up-open-mini"></span></a>
            </div>
            <div id="contmod" class="uk-modal">
			    <div class="uk-modal-dialog">
			        <a class="uk-modal-close uk-close"></a>
			        ...
			    </div>
			</div>

		</div>
		<div id="mobile-menu" class="uk-offcanvas">
		    <div class="uk-offcanvas-bar">
		     <div id="offcan-menu">
		    <div class="uk-text-center" id="mob-cart">
		   
				     <?php if( class_exists( 'WooCommerce' ) ){ ?>
                      <a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo sprintf (_n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> - <?php echo WC()->cart->get_cart_total(); ?></a>
                    <?php } else { ?>
                         <a href="#contmod" data-uk-modal="" class="uk-button">Hello</a>  
                    <?php }; ?>
            </div>
				<?php

				$defaults = array(
					'theme_location'  => '',
					'menu'            => '',
					'container'       => 'div',
					'container_class' => '',
					'container_id'    => '',
					'menu_class'      => 'menu',
					'menu_id'         => '',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'depth'           => 0,
					'walker'          => ''
				);

				wp_nav_menu( $defaults );

				?>
				</div>
		    </div>
		</div>
		<!-- /wrapper -->
		<?php wp_footer(); ?>

		
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
        
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/core/core.min.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/core/utility.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/core/touch.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/core/smooth-scroll.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/core/scrollspy.min.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/core/dropdown.min.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/core/offcanvas.min.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/core/modal.min.js"></script>

		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/components/sticky.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/components/slideshow.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/components/slider.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/components/lightbox.min.js"></script>


		<!--<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/index.js"></script>-->

		

	</body>
</html>