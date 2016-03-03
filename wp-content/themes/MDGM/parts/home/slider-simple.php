<section id="slider" class="section-space uk-margin-top-remove">

	    <div class="uk-slidenav-position" data-uk-slideshow="{autoplay:true}">
		    <ul class="uk-slideshow">
		        <?php
				$original_query = $wp_query;
				$wp_query = null;
				$args = array(
				    'numberposts' => 99,
				    'post_type' => 'Slider',
				    'order_by' => 'date',
				    'order' => 'ASC',
				    );
				$wp_query = new WP_Query($args);
				?>

				<?php if ($wp_query->have_posts()): ?>
				<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
				<li>
					<?php if (has_post_thumbnail()): // Check if Thumbnail exists?>
						<?php the_post_thumbnail('slider') ?>
		            <?php endif; ?>
		            <div class="uk-overlay-panel">
			            <div class="uk-width-small-1-1 uk-width-medium-1-2 uk-container-center uk-height-1-1">
				            <div class="uk-vertical-align uk-height-1-1">
							    <div class="uk-vertical-align-middle">
							    	<h2 class="uk-margin-remove"><?php the_title(); ?></h2>
			              <p><?php the_excerpt(); ?></p>
										<a href="<?php echo link_get_meta( 'link_link' ); ?>"><?php echo link_get_meta( 'link_text' ); ?></a>
							    </div>
							</div>
			            </div>
		            </div>
		        </li>
		        <?php endwhile; else: ?>
				    <li class="defbg">
				    	<img src="<?php echo esc_url( get_header_image() ); ?>">
				    </li>
			<?php endif; ?>
		    </ul>
		    <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
		    <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
		    <ul class="uk-dotnav uk-dotnav-contrast uk-position-bottom uk-flex-center">
		    <?php
				$original_query = $wp_query;
				$wp_query = null;
				$args = array(
				    'numberposts' => 99,
				    'post_type' => 'Slider',
				    'order_by' => 'date',
				    'order' => 'ASC',
				    );
				$wp_query = new WP_Query($args);
				$slides_count = 0;
				?>

				<?php if ($wp_query->have_posts()): ?>
				<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
		        <li data-uk-slideshow-item="<?php echo $slides_count++; ?>"><a href=""></a></li>
		        <?php endwhile; else: ?>

			<?php endif; ?>
		    </ul>
		</div>
    </section>
