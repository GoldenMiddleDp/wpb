<?php get_header(); ?>
	<div class="uk-container uk-container-center uk-margin-top uk-margin-bottom">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		 
		<div id="arcive-post<?php the_id() ?>" class="arcive-post">
		 
		<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

		<small><?php the_time('F jS, Y'); ?></small>

		 <div class="entry">
		   <?php the_content(); ?>
		 </div>

		 <p class="postmetadata">Posted in <?php the_category(', '); ?></p>
		 </div>

		 
		 <?php endwhile; else: ?>

		 <p>Sorry, no posts matched your criteria.</p>

		 <?php endif; ?>

	</div>
<?php get_footer(); ?>