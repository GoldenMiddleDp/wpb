<?php get_header(); ?>

	<div class="uk-container uk-container-center uk-margin-top uk-margin-bottom page-container">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div id="page<?php the_id() ?>">
			<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

			 <div <?php post_class(); ?>>
			   <?php the_content(); ?>
			 </div>

		 </div>
		 			 <?php
 	$defaults = array(
		'before'           => '<p>' . __( 'Pages:', 'boot-starter-gm' ),
		'after'            => '</p>',
		'link_before'      => '',
		'link_after'       => '',
		'next_or_number'   => 'number',
		'separator'        => ' ',
		'nextpagelink'     => __( 'Next page', 'boot-starter-gm' ),
		'previouspagelink' => __( 'Previous page', 'boot-starter-gm' ),
		'pagelink'         => '%',
		'echo'             => 1
	);

        wp_link_pages( $defaults );

?>
		<?php endwhile; else: ?>
		<p><?php _e( 'Sorry, no posts matched your criteria.', 'MDGM' ); ?></p>
		<?php endif; ?>
	</div>
<?php get_footer(); ?>
