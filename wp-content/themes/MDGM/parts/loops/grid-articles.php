<div class="uk-margin-large-bottom uk-width-small-1-1 uk-width-medium-1-3">
		<article id="post-<?php the_ID(); ?>" <<?php post_class( 'uk-article' ); ?>>

			<?php if ( has_post_thumbnail()) { ?>


						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
							<?php the_post_thumbnail('small'); // Declare pixel size you need inside the array ?>
						</a>
						<h3 class="uk-width-1-1">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</h3>
						<div class="uk-article-meta uk-width-1-1">
							<?php the_time('F jS, Y'); ?> <?php _e( 'Posted in', 'MDGM' ); ?> <?php the_category(', '); ?>
						</div>
						<div class="article-content">
							<?php my_excerpt('short'); ?>
					 		<a href="<?php the_permalink(); ?>"><?php _e( 'Read', 'MDGM' ); ?> <span class="lnr-arrow-right"></span></a>
					</div>

			<?php } else { ?>
				<h3 class="uk-width-1-1">
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</h3>
				<div class="uk-article-meta uk-width-1-1">
					<?php the_time('F jS, Y'); ?> <?php _e( 'Posted in', 'MDGM' ); ?> <?php the_category(', '); ?>
				</div>
				<div class="article-content">
					<?php my_excerpt('short'); ?>
				</div>
				<a href="<?php the_permalink(); ?>"><?php _e( 'Read', 'MDGM' ); ?> <span class="lnr-arrow-right"></span></a>
			<?php } ?>
		</article>
		<hr class="uk-article-divider">
</div>
