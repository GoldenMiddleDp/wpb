    <section id="clients" class="uk-container uk-container-center section-space">
    <h2 class="uk-text-center uk-margin-large-top uk-margin-large-bottom"><?php _e( 'Our features', 'MDGM' ); ?></h2>
    <div class="uk-grid">
    	<?php
		$original_query = $wp_query;
		$wp_query = null;
		$args = array(
		    'numberposts' => 99,
		    'post_type' => 'features',
		    'order_by' => 'date',
		    'order' => 'ASC',
		    );
		$wp_query = new WP_Query($args);
		?>

		<?php if ($wp_query->have_posts()): ?>
		<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
		<div class="uk-width-small-1-1 uk-width-medium-1-4 uk-text-center uk-margin-bottom">
			<span class="fico <?php echo icon_get_meta( 'icon_icon_class' ) ?>"></span>

            <h3><?php the_title(); ?></h3>
            <p><?php the_excerpt(); ?></p>

        </div>
        <?php endwhile; else: ?>
		    <div class="uk-width-small-1-1 uk-width-medium-1-4 uk-text-center uk-margin-bottom">
		    	<img src="<?php echo get_template_directory_uri(); ?>/img/img-placeholder.svg" width="110px;">
		    </div>
		    <div class="uk-width-small-1-1 uk-width-medium-1-4 uk-text-center uk-margin-bottom">
		    	<img src="<?php echo get_template_directory_uri(); ?>/img/img-placeholder.svg" width="110px;">
		    </div>
		    <div class="uk-width-small-1-1 uk-width-medium-1-4 uk-text-center uk-margin-bottom">
		    	<img src="<?php echo get_template_directory_uri(); ?>/img/img-placeholder.svg" width="110px;">
		    </div>
		    <div class="uk-width-small-1-1 uk-width-medium-1-4 uk-text-center uk-margin-bottom">
		    	<img src="<?php echo get_template_directory_uri(); ?>/img/img-placeholder.svg" width="110px;">
		    </div>
		    <div class="uk-width-small-1-1 uk-width-medium-1-4 uk-text-center uk-margin-bottom">
		    	<img src="<?php echo get_template_directory_uri(); ?>/img/img-placeholder.svg" width="110px;">
		    </div>
		    <div class="uk-width-small-1-1 uk-width-medium-1-4 uk-text-center uk-margin-bottom">
		    	<img src="<?php echo get_template_directory_uri(); ?>/img/img-placeholder.svg" width="110px;">
		    </div>
		    <div class="uk-width-small-1-1 uk-width-medium-1-4 uk-text-center uk-margin-bottom">
		    	<img src="<?php echo get_template_directory_uri(); ?>/img/img-placeholder.svg" width="110px;">
		    </div>
		    <div class="uk-width-small-1-1 uk-width-medium-1-4 uk-text-center uk-margin-bottom">
		    	<img src="<?php echo get_template_directory_uri(); ?>/img/img-placeholder.svg" width="110px;">
		    </div>
		<?php endif; ?>
	</div>
    </section>
