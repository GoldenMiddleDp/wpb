<?php get_header(); ?>
	<div class="uk-container uk-container-center uk-margin-top uk-margin-bottom post-container">
	<div class="uk-grid">
		<div class="uk-width-small-1-1 uk-width-medium-4-5">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		 
				<article id="post<?php the_id() ?>" <?php post_class(); ?>>
			 
					<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

					<small><?php the_time('F jS, Y'); ?>, Posted in <?php the_category(', '); ?></small>

			 		<div class="entry">
			   			<?php the_content(); ?>
			 		</div>
					<div class="share">
						<script type="text/javascript" src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js" charset="utf-8"></script>
						<script type="text/javascript" src="//yastatic.net/share2/share.js" charset="utf-8"></script>
						<div class="ya-share2" data-services="vkontakte,facebook,gplus,twitter,pocket,tumblr,viber,whatsapp"></div>
					</div>
					<div class="single-tags"><?php get_the_tags() ?></div>
		 		</article>
 				<hr class="uk-article-divider">
				<div class="uk-grid uk-margin-top">
					<div class="nav-previous uk-width-1-2 uk-text-left"><?php previous_post_link('<span class="lnr-arrow-left"></span> %link'); ?></div> 
					<div class="nav-next uk-width-1-2 uk-text-right"><?php next_post_link( '%link <span class="lnr-arrow-right"></span>' ); ?></div>
				</div>
			</div>
		
			<aside class="uk-width-small-1-1 uk-width-medium-1-5 sidebar">
				<?php require('sidebar.php'); ?>
			</aside>
			 
		 <?php endwhile; else: ?>

		 <p>Записей пока нет</p>

		 <?php endif; ?>
		 
		 <?php //comments_template(); ?>
</div>
</div>
		
<?php get_footer(); ?>