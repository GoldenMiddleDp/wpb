<div class="uk-margin-large-bottom uk-width-small-1-1 uk-width-medium-1-3">
		<article id="post-<?php the_ID(); ?>" <<?php post_class( 'uk-article' ); ?>>
			<figure class="uk-overlay uk-overlay-hover">
		    <?php the_post_thumbnail('small'); ?>
		    <figcaption class="uk-overlay-panel uk-overlay-background uk-overlay-fade">
					<h3 class="uk-width-1-1">
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</h3>
					<div class="uk-article-meta uk-width-1-1">
						<?php the_time('F jS, Y'); ?> <?php _e( 'Posted in', 'MDGM' ); ?> <?php the_category(', '); ?>
					</div>
					<div class="article-content">
						<?php my_excerpt('short'); ?>
				</div>
		    </figcaption>
				<a class="uk-position-cover" href="<?php the_permalink(); ?>"></a>
			</figure>
		</article>
</div>
