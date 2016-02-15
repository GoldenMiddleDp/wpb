<?php
function my_login_logo() { ?>
    <style type="text/css">
        .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/logo.svg);
            padding-bottom: 30px;
            width:100%;
            background-size:auto;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );


if (!isset($content_width)){
	$content_width = 1200;
}

if (function_exists('add_theme_support')){
	// Add Menu Support
    add_theme_support('menus');

    // Add Title Support
    add_theme_support( 'title-tag' );

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
	
    add_image_size('slider', 1920, 600, true); // Large Thumbnail
	add_image_size('large', 1200, '', true); // Large Thumbnail
    add_image_size('medium', 720, '', true); // Medium Thumbnail
    add_image_size('small', 320, '', true); // Small Thumbnail
    add_image_size('extra-small', 80, '', true); // Small Thumbnail


    // Add Custom Backgrounds
    add_theme_support('custom-background', array(
	'default-color' => 'FFF',
	//'default-image' => get_template_directory_uri() . '/img/noisy-bg.png'
    ));

    // Add  Custom Header
    add_theme_support('custom-header', array(
	'default-image'			=> get_template_directory_uri() . '/img/header/bs-bg.jpg',
	'header-text'			=> false,
	'default-text-color'	=> '000',
	'width'				    => 1000,
	'height'			    => 198,
	'random-default'		=> false,
	'wp-head-callback'		=> $wphead_cb,
	'admin-head-callback'		=> $adminhead_cb,
	'admin-preview-callback'	=> $adminpreview_cb
    ));

    // Add RSS
    add_theme_support('automatic-feed-links');

    // Localisation Support
    load_theme_textdomain('MDGM', get_template_directory() . '/languages');
}
    load_theme_textdomain('MDGM', get_template_directory() . '/languages');
    function enable_threaded_comments()
    {
        if (!is_admin()) {
            if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
                wp_enqueue_script('comment-reply');
            }
        }
    }

    function custom_excerpt_length( $length ) {
        return 60;
    }
    add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

    add_filter( 'the_content_more_link', 'modify_read_more_link' );
    function modify_read_more_link() {
    return '<a class="more-link" href="' . get_permalink() . '">Читать далее</a>';
    }
    function new_excerpt_more($more) {
       global $post;
    return '';
    }
    add_filter('excerpt_more', 'new_excerpt_more');

    function my_theme_add_editor_styles() {
    add_editor_style( 'custom-editor-style.css' );
    }
    add_action( 'admin_init', 'my_theme_add_editor_styles' );

    add_filter('show_admin_bar', '__return_false');

    if( !is_admin()){
        wp_deregister_script('jquery');
        wp_register_script('jquery', ("/wp-content/themes/MDGM/js/jquery214.min.js"), false, '2.1.4');
        wp_enqueue_script('jquery');
    }

