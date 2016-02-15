<section id="cat-carousel" class="section-space">
<h2 class="uk-text-center uk-margin-large-top uk-margin-large-bottom">Категории товаров</h2>
<div class="uk-container uk-container-center">
<div class="uk-slidenav-position" data-uk-slider>
      <div class="">
        <div class="uk-slider-container">
          <ul class="uk-slider grid-mar-fix uk-grid-medium uk-grid-width-medium-1-6 uk-grid-width-small-1-1">
            <?php
            $taxonomyName = "product_cat";
            $prod_categories = get_terms($taxonomyName, array(
                'orderby'=> 'name',
                'order' => 'ASC',
                'hide_empty' => 0
            ));  

            foreach( $prod_categories as $prod_cat ) :
                if ( $prod_cat->parent != 0 )
                    continue;
                $cat_thumb_id = get_woocommerce_term_meta( $prod_cat->term_id, 'thumbnail_id', true );
                $cat_thumb_url = wp_get_attachment_thumb_url( $cat_thumb_id );
                $term_link = get_term_link( $prod_cat, 'product_cat' );
                ?>
                    <li class="uk-text-center woo-product-loop">
                      <a class="" href="<?php echo $term_link; ?>"><img src="<?php echo $cat_thumb_url; ?>" alt="" /></a> 
                    
                      <p><a class="" href="<?php echo $term_link; ?>"><?php echo $prod_cat->name; ?></a></p>
                    </li>
                <?php endforeach; 
            wp_reset_query(); ?>
            </ul>
        </div>
      </div>
      <a href="" class="uk-slidenav uk-slidenav-previous" data-uk-slider-item="previous"></a>
      <a href="" class="uk-slidenav uk-slidenav-next" data-uk-slider-item="next"></a>
</div>
</section>