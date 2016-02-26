<div class="uk-accordion" data-uk-accordion>

<?php
$args = array(
  'post_type' => 'post',
  'numberposts' => 99,
  //'category' => 'clients',
  'order_by' => 'date',
  //'order' => 'ASC',
 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();?>

			<h3 <?php post_class( 'uk-accordion-title' ); ?>>
				<?php the_title(); ?>
			</h3>
      <div class="uk-accordion-content">
			     <?php the_content(); ?>
      </div>
      <!-- <div class="uk-article-meta uk-width-1-1">
				<?php //the_time('F jS, Y'); ?> <?php //_e( 'Posted in', 'MDGM' ); ?> <?php //the_category(', '); ?>
			</div> -->

<?php endwhile; ?>

</div>
