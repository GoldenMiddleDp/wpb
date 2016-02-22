<section id="revs" class="uk-container uk-container-center section-space">
    	<h2 class="uk-text-center uk-margin-large-top uk-margin-large-bottom"><?php _e( 'Reviews', 'MDGM' ); ?></h2>
		<div class="uk-slidenav-position" data-uk-slider>
			<div class=" uk-width-small-1-1">
				<div class="uk-slider-container">
					<ul class="uk-slider grid-mar-fix uk-grid-medium uk-grid-width-medium-1-2 uk-grid-width-small-1-1">

							<?php
					$original_query = $wp_query;
					$wp_query = null;
					$args = array(
						'numberposts' => 99,
						'post_type' => 'reviews',
						'order_by' => 'date',
						'order' => 'ASC',
						);
					$wp_query = new WP_Query($args);
					?>

					<?php if ($wp_query->have_posts()): ?>
					<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
						<li>
						<div class="uk-grid uk-grid-small">
							<div class="uk-width-1-1">
								<div class="rev-wrap"><?php the_content(); ?></div>
							</div>
							<div class="uk-width-2-10">
								<?php if (has_post_thumbnail()): // Check if Thumbnail exists?>
									<?php the_post_thumbnail('extra-small', array('class' => 'uk-border-circle')) ?>
								<?php endif; ?>
							</div>

							<div class="uk-width-8-10 uk-margin-small-top">
								<h3 class="uk-margin-small-top uk-margin-bottom-remove"><?php the_title(); ?></h3>
								<small class="uk-margin-top-remove"><?php the_excerpt(); ?></small>
							</div>

						</div>
						</li>

					<?php endwhile; else: ?>
					<li>
						<div class="uk-grid uk-grid-small">
							<div class="uk-width-1-1">
								<div class="rev-wrap">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut laboriosam architecto iste nobis inventore odit omnis dolore numquam eius impedit et reprehenderit id adipisci, quod minus. Ducimus nihil, commodi necessitatibus.
								</div>
							</div>
							<div class="uk-width-2-10">
							<img src="<?php echo get_template_directory_uri(); ?>/img/img-placeholder.svg" width="80px;">

							</div>

							<div class="uk-width-8-10 uk-margin-small-top">

								<h3 class="uk-margin-small-top uk-margin-bottom-remove">John Galt</h3>
								<small class="uk-margin-top-remove">who is him</small>
							</div>

						</div>
						</li>
						<li>
						<div class="uk-grid uk-grid-small">
							<div class="uk-width-1-1">
								<div class="rev-wrap">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut laboriosam architecto iste nobis inventore odit omnis dolore numquam eius impedit et reprehenderit id adipisci, quod minus. Ducimus nihil, commodi necessitatibus.
								</div>
							</div>
							<div class="uk-width-2-10">
								<img src="<?php echo get_template_directory_uri(); ?>/img/img-placeholder.svg" width="80px;">
							</div>

							<div class="uk-width-8-10 uk-margin-small-top">

								<h3 class="uk-margin-small-top uk-margin-bottom-remove">John Galt</h3>
								<small class="uk-margin-top-remove">who is him</small>
							</div>

						</div>
						</li>
						<li>
						<div class="uk-grid uk-grid-small">
							<div class="uk-width-1-1">
								<div class="rev-wrap">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut laboriosam architecto iste nobis inventore odit omnis dolore numquam eius impedit et reprehenderit id adipisci, quod minus. Ducimus nihil, commodi necessitatibus.
								</div>
							</div>
							<div class="uk-width-2-10">
								<img src="<?php echo get_template_directory_uri(); ?>/img/img-placeholder.svg" width="80px;">
							</div>

							<div class="uk-width-8-10 uk-margin-small-top">

								<h3 class="uk-margin-small-top uk-margin-bottom-remove">John Galt</h3>
								<small class="uk-margin-top-remove">who is him</small>
							</div>

						</div>
						</li>
					<?php endif; ?>
					</ul>
				</div>
			</div>

			<a href="" class="uk-slidenav uk-slidenav-previous" data-uk-slider-item="previous"></a>
			<a href="" class="uk-slidenav uk-slidenav-next" data-uk-slider-item="next"></a>

		</div>
    </section>
