
<div class="uk-grid">
 <?php
$args = array( 'post_type' => 'post' );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();?>

<?php require('parts/loops/article.php'); ?>

 <?php endwhile; ?>
 </div>
 		<div class="uk-grid">
			<div class="nav-previous uk-width-1-2 uk-text-left"><?php previous_posts_link(); ?></div>
			<div class="nav-next uk-width-1-2 uk-text-right"><?php next_posts_link(); ?></div>
		</div>
