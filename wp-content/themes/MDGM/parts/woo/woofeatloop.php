<section id="feat-carousel" class="section-space">
<h2 class="uk-text-center uk-margin-large-top uk-margin-large-bottom"><?php _e( 'Featured products', 'MDGM' ); ?></h2>
<div class="uk-container uk-container-center">
<div class="uk-slidenav-position" data-uk-slider>
      <div class="uk-width-small-1-1">
        <div class="uk-slider-container">
          <ul class="uk-slider grid-mar-fix uk-grid-medium uk-padding-remove uk-grid-width-medium-1-4 uk-grid-width-small-1-1">
              <?php
                $meta_query   = WC()->query->get_meta_query();
                $meta_query[] = array(
                    'key'   => '_featured',
                    'value' => 'yes'
                );
                $args = array(
                    'post_type'   =>  'product',
                    'stock'       =>  1,
                    'showposts'   =>  6,
                    'orderby'     =>  'date',
                    'order'       =>  'DESC',
                    'meta_query'  =>  $meta_query
                );

              $loop = new WP_Query( $args );
              while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
              <li class="woo-product-loop">
              <?php if ( has_post_thumbnail()) : ?>
              <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'front-prods' ); ?></a>
              <?php endif; ?>
              <div class="uk-grid uk-grid-small">
                  <div class="uk-width-small-1-1"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                  <div class="uk-width-small-1-1"><?php echo $product->get_price_html(); ?></div>

              </div>
              <!--  <a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"></a> -->
              </li>
            <?php endwhile; ?>
            <?php wp_reset_query(); ?>

          </ul>
        </div>
      </div>
      <a href="" class="uk-slidenav uk-slidenav-previous" data-uk-slider-item="previous"></a>
      <a href="" class="uk-slidenav uk-slidenav-next" data-uk-slider-item="next"></a>
</div>
</section>
