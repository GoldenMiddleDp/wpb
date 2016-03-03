<!doctype html>
<html <?php language_attributes(); ?> class="">
	<head>
  <?php wp_head(); ?>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' : '; } ?><?php bloginfo('name'); ?></title>

    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

    <link rel="stylesheet/less" href="<?php echo get_template_directory_uri(); ?>/less/uikit.less">
    <link rel="stylesheet/less" href="<?php echo get_template_directory_uri(); ?>/less/template.less">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/less.min.js"></script>

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

    <meta property="og:title" content="<?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' : '; } ?><?php bloginfo('name'); ?>">
    <meta property="og:site_name" content="<?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' : '; } ?><?php bloginfo('name'); ?>">
    <meta property="og:url" content="<?php echo home_url(); ?>">
    <meta property="og:description" content="<?php bloginfo('description'); ?>">
    <meta property="fb:app_id" content="00000">
    <meta property="og:type" content="business.business">

    <?php if(is_home()){ ?>
        <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/screenshot.png">
    <?php } elseif(is_single()) { ?>

    <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 1200,768 ), true, '' ); ?>

      <meta property="og:image" content="<?php echo $src[0]; ?>">
    <?php } else { ?>
      <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/screenshot.png">
    <?php } ?>



	</head>
	<body <?php body_class(); ?>>
    <?php include_once('functions/options-varible.php'); ?>

    <div class="wrapper">


        <?php
            $example_position = get_theme_mod( 'header_type' );
            if( $example_position != '' ) {
                switch ( $example_position ) {
                    case 'sticky':
                        include_once('parts/headers/sticky.php');
                        break;
                    case 'overlay':
                        include_once('parts/headers/overlay.php');
                        break;
                    default:
                        include_once('parts/headers/default.php');
                        break;
                }
            }
        ?>

        <div id="maincontent" class="height-fix">
