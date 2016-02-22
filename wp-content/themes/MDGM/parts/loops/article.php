<div class="uk-margin-large-bottom uk-width-1-1">
		<article id="post-<?php the_ID(); ?>" <<?php post_class( 'uk-article' ); ?>>
			<h2 class="uk-width-1-1">
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</h2>
			<div class="uk-article-meta uk-width-1-1">
				<?php the_time('F jS, Y'); ?> <?php _e( 'Posted in', 'MDGM' ); ?> <?php the_category(', '); ?>
			</div>
			<?php if ( has_post_thumbnail()) { ?>
				<div class="uk-grid">
					<div class="uk-width-small-1-1 uk-width-medium-3-10 uk-margin-small-top">
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
							<?php the_post_thumbnail('small'); // Declare pixel size you need inside the array ?>
						</a>
					</div>
					<div class="uk-width-small-1-1 uk-width-medium-7-10">
						<div class="article-content">
						 <?php my_excerpt('regular'); ?>
					 </div>
					 <a href="<?php the_permalink(); ?>"><?php _e( 'Read', 'MDGM' ); ?> <span class="lnr-arrow-right"></span></a>
					</div>
				</div>
			<?php } else { ?>
				<div class="article-content">
					<?php my_excerpt('regular'); ?>
				</div>
				<a href="<?php the_permalink(); ?>"><?php _e( 'Read', 'MDGM' ); ?> <span class="lnr-arrow-right"></span></a>
			<?php } ?>
		</article>
		<hr class="uk-article-divider">
</div>
