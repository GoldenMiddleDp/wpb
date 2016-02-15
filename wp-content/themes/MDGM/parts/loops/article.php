<?php if ( has_post_thumbnail()) { ?>
	<div class="uk-margin-large-bottom">
		<article id="post-<?php the_ID(); ?>" <<?php post_class( 'uk-article' ); ?>>
		<h2 class="uk-width-1-1"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<div class="uk-article-meta uk-width-1-1"><?php the_time('F jS, Y'); ?> Posted in <?php the_category(', '); ?></div>
		<div class="uk-grid">
			<div class="uk-width-small-1-1 uk-width-medium-3-10 uk-margin-small-top">
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
					<?php the_post_thumbnail('small'); // Declare pixel size you need inside the array ?>
				</a>
			</div>
			<div class="uk-width-small-1-1 uk-width-medium-7-10">
			  <div class="article-content">
			   <?php the_excerpt(); ?>
			 </div>
			 <a href="<?php the_permalink(); ?>">Читать далее <span class="lnr-arrow-right"></span></a>
			</div>
		</div>
		 </article>
		 <hr class="uk-article-divider">
	</div>

<?php }else{ ?>	

	<div class="uk-margin-large-bottom">
		<article id="post-<?php the_ID(); ?>" <<?php post_class( 'uk-article' ); ?>>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<div class="uk-article-meta"><?php the_time('F jS, Y'); ?> Posted in <?php the_category(', '); ?></div>

		  <div class="article-content">
		   <?php the_excerpt(); ?>
		 </div>
		 <a href="<?php the_permalink(); ?>">Читать далее <span class="icon-right-open-mini"></span></a>

		 </article>
		 <hr class="uk-article-divider">
	</div>

<?php } ?>