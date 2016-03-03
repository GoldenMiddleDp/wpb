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
	<?php

            include('parts/home/slider-simple.php');

            if( class_exists( 'WooCommerce' ) ){

                include('parts/woo/wooloop.php');
                include('parts/woo/woocatloop.php');
                include('parts/woo/woofeatloop.php');
                include('parts/woo/woosaleloop.php');

             } else {

                if( get_theme_mod( 'team' ) == '') { include('parts/home/team.php'); } else {}

             };

            if( get_theme_mod( 'features' ) == '') { include('parts/home/features.php'); } else {}
            if( get_theme_mod( 'clients' ) == '') { include('parts/home/clients.php'); } else {}
            if( get_theme_mod( 'revs' ) == '') { include('parts/home/revs.php'); } else {}

            if( get_theme_mod( 'news' ) == '') {
                echo "<div class=\"uk-container uk-container-center uk-margin-large-top uk-margin-bottom\">";
                echo "<h2 class=\"uk-text-center uk-margin-large-top uk-margin-large-bottom\"><?php _e( 'Last news', 'MDGM' ); ?></h2>";
                include('parts/loops/article-cat.php');
                echo "</div>";

            } else {}


        ?>
</div>
<?php get_footer(); ?>
