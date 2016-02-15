    <section id="team" class="uk-container uk-container-center section-space">
    <h2 class="uk-text-center uk-margin-large-top uk-margin-large-bottom">Наша комада</h2>
    <div class="uk-grid">
    	<?php
		$original_query = $wp_query;
		$wp_query = null;
		$args = array(
		    'numberposts' => 99,
		    'post_type' => 'team',
		    'order_by' => 'date',
		    'order' => 'ASC',
		    );
		$wp_query = new WP_Query($args);
		?>

		<?php if ($wp_query->have_posts()): ?>
		<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
		<div class="uk-width-small-1-1 uk-width-medium-1-3 uk-text-center">
			<?php if (has_post_thumbnail()): // Check if Thumbnail exists?>
				<?php the_post_thumbnail('small', array('class' => 'uk-border-circle')) ?>
            <?php endif; ?>
            
            <h3 class="uk-margin-bottom-remove"><?php the_title(); ?></h3>
            <p class="uk-margin-small-top"><?php the_excerpt(); ?></p>
            
        </div>
        <?php endwhile; else: ?>
		    
		    	<div class="uk-width-small-1-1 uk-width-medium-1-3 uk-text-center">
		    		<img src="<?php echo get_template_directory_uri(); ?>/img/img-placeholder.svg" width="280px;">
		    		<h3 class="uk-margin-bottom-remove">John Galt</h3>
            		<p class="uk-margin-small-top">who is him</p>
		    	</div>
		    	<div class="uk-width-small-1-1 uk-width-medium-1-3 uk-text-center">
		    		<img src="<?php echo get_template_directory_uri(); ?>/img/img-placeholder.svg" width="280px;">
		    		<h3 class="uk-margin-bottom-remove">John Galt</h3>
            		<p class="uk-margin-small-top">who is him</p>
		    	</div>
		    	<div class="uk-width-small-1-1 uk-width-medium-1-3 uk-text-center">
		    		<img src="<?php echo get_template_directory_uri(); ?>/img/img-placeholder.svg" width="280px;">
		    		<h3 class="uk-margin-bottom-remove">John Galt</h3>
            		<p class="uk-margin-small-top">who is him</p>
		    	</div>
		    
		<?php endif; ?>
	</div>
    </section>