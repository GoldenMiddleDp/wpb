<?php get_header(); ?>
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
<div class="home-page">
	<?php require('parts/home/slider-simple.php'); ?>

	<?php if( class_exists( 'WooCommerce' ) ){ ?>
	    <?php require('parts/woo/wooloop.php'); ?>
	    <?php require('parts/woo/woocatloop.php'); ?>
	    <?php require('parts/woo/woofeatloop.php'); ?>
	    <?php require('parts/woo/woosaleloop.php'); ?>
	<?php } else { ?>
		<?php require('parts/home/team.php'); ?>
	<?php }; ?>
	
	<?php require('parts/home/features.php'); ?>
	<?php require('parts/home/clients.php'); ?>
	<?php require('parts/home/revs.php'); ?>

	<div class="uk-container uk-container-center uk-margin-large-top uk-margin-bottom">
		<h2 class="uk-text-center uk-margin-large-top uk-margin-large-bottom">Последние новости</h2>
		<?php get_template_part('loop'); ?>
	</div>
</div>
<?php get_footer(); ?>