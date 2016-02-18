<?php get_header(); ?>
	<div class="uk-container uk-container-center uk-margin-top uk-margin-bottom" id="cat-loop">
		<div class="uk-grid">
			<div class="uk-width-small-1-1 uk-width-medium-4-5">
			    <?php
					global $query_string;

					$query_args = explode("&", $query_string);
					$search_query = array();

					if( strlen($query_string) > 0 ) {
						foreach($query_args as $key => $string) {
							$query_split = explode("=", $string);
							$search_query[$query_split[0]] = urldecode($query_split[1]);
						} // foreach
					} //if

					$search = new WP_Query($search_query);
					$search ->query('post_type=post&showposts=99'.'&paged='.$paged);
					?>

					<?php while ($search->have_posts()) : $search->the_post(); ?>

							<?php require('parts/loops/article.php'); ?>

					<?php endwhile; ?>

					    
			</div>
			<aside class="uk-width-small-1-1 uk-width-medium-1-5 sidebar">
				<?php require('sidebar.php'); ?>
			</aside>
		</div>
	</div><!-- #content -->

<script>


</script>

<?php get_footer(); ?>