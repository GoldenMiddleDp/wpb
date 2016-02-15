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
	$q = new WP_Query($args);
	if( $q->have_posts() ):
		while($q->have_posts()): $q->the_post();
			
			?>
			<?php if ( has_post_thumbnail()) { ?>
	<div class="uk-margin-large-bottom">
		<article id="post-<?php the_ID(); ?>" <<?php post_class( 'uk-article' ); ?>>
		<h2 class="uk-width-1-1"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<div class="uk-article-meta uk-width-1-1"><?php the_time('F jS, Y'); ?> Posted in <?php the_category(', '); ?></div>
		<div class="uk-grid">
			<div class="uk-width-small-1-1 uk-width-medium-3-10 uk-margin-small-top">
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
					<?php the_post_thumbnail('small'); // Declare pixel size you need inside the array ?>
				</a>
			</div>
			<div class="uk-width-small-1-1 uk-width-medium-7-10">
			  <div class="article-content">
			   <?php the_excerpt(); ?>
			 </div>
			 <a href="<?php the_permalink(); ?>">Читать далее <span class="lnr-arrow-right"></span></a>
			</div>
		</div>
		 </article>
		 <hr class="uk-article-divider">
	</div>

<?php }else{ ?>	

	<div class="uk-margin-large-bottom">
		<article id="post-<?php the_ID(); ?>" <<?php post_class( 'uk-article' ); ?>>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<div class="uk-article-meta"><?php the_time('F jS, Y'); ?> Posted in <?php the_category(', '); ?></div>

		  <div class="article-content">
		   <?php the_excerpt(); ?>
		 </div>
		 <a href="<?php the_permalink(); ?>">Читать далее <span class="icon-right-open-mini"></span></a>

		 </article>
		 <hr class="uk-article-divider">
	</div>

<?php } ?>
			<?php
		endwhile;
	endif;
	wp_reset_postdata();
	die();
}
 
 
add_action('wp_ajax_loadmore', 'true_load_posts');
add_action('wp_ajax_nopriv_loadmore', 'true_load_posts');