<?php get_header(); ?>
	<div class="uk-container uk-container-center uk-margin-top uk-margin-bottom" id="cat-loop">
		<div class="uk-grid uk-grid-medium">
			<div class="uk-width-small-1-1 uk-width-medium-3-4">
			    <?php
					$new_query = new WP_Query();
					$new_query->query('post_type=post&showposts=12'.'&paged='.$paged);
					?>

					<?php while ($new_query->have_posts()) : $new_query->the_post(); ?>

							<?php require('parts/loops/article.php'); ?>

					<?php endwhile; ?>

					    <?php if (  $wp_query->max_num_pages > 1 ) : ?>
						<script id="true_loadmore">
						var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
						var true_posts = '<?php echo serialize($wp_query->query_vars); ?>';
						var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
						</script>
					<?php endif; ?>
			</div>
			<aside class="uk-width-small-1-1 uk-width-medium-1-4 sidebar">
				<?php require('sidebar.php'); ?>
			</aside>
		</div>
	</div><!-- #content -->

<script>


</script>

<?php get_footer(); ?>
