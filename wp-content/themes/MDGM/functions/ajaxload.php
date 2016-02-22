<?php

function true_loadmore_scripts() {

	if(is_category()){
 	wp_enqueue_script( 'true_loadmore', get_stylesheet_directory_uri() . '/js/loadmore.js', array('jquery') );
 } else {

 }
}

add_action( 'wp_enqueue_scripts', 'true_loadmore_scripts' );

function true_load_posts(){
	$args = unserialize(stripslashes($_POST['query']));
	$args['paged'] = $_POST['page'] + 1; // следующая страница
	$args['post_status'] = 'publish';
	$p = get_template_directory_uri();
	$q = new WP_Query($args);
	if( $q->have_posts() ):
		while($q->have_posts()): $q->the_post();
		require_once(__DIR__ .'/../parts/loops/article.php');
		endwhile;
	endif;
	wp_reset_postdata();
	die();
}

add_action('wp_ajax_loadmore', 'true_load_posts');
add_action('wp_ajax_nopriv_loadmore', 'true_load_posts');
