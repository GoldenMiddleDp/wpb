<?php



// Register Custom Post Type
function gm_slider() {

$labels = array(
'name'                  => _x( 'Slider', 'Post Type General Name', 'MDGM' ),
'singular_name'         => _x( 'Slider', 'Post Type Singular Name', 'MDGM' ),
'menu_name'             => __( 'Slider', 'MDGM' ),
'name_admin_bar'        => __( 'Slider', 'MDGM' ),
'archives'              => __( 'Slider', 'MDGM' ),
'parent_item_colon'     => __( 'Slider', 'MDGM' ),
'all_items'             => __( 'All slides', 'MDGM' ),
'add_new_item'          => __( 'Add new slide', 'MDGM' ),
'add_new'               => __( 'Add Item', 'MDGM' ),
'new_item'              => __( 'New Item', 'MDGM' ),
'edit_item'             => __( 'Edit Item', 'MDGM' ),
'update_item'           => __( 'Update Item', 'MDGM' ),
'view_item'             => __( 'View Item', 'MDGM' ),
'search_items'          => __( 'Search Item', 'MDGM' ),
'not_found'             => __( 'Not found', 'MDGM' ),
'not_found_in_trash'    => __( 'Not found in Trash', 'MDGM' ),
'featured_image'        => __( 'Featured Image', 'MDGM' ),
'set_featured_image'    => __( 'Set slide image', 'MDGM' ),
'remove_featured_image' => __( 'Remove slide image', 'MDGM' ),
'use_featured_image'    => __( 'Use as slide image', 'MDGM' ),
'insert_into_item'      => __( 'Insert into item', 'MDGM' ),
'uploaded_to_this_item' => __( 'Uploaded to this item', 'MDGM' ),
'items_list'            => __( 'Items list', 'MDGM' ),
'items_list_navigation' => __( 'Items list navigation', 'MDGM' ),
'filter_items_list'     => __( 'Filter items list', 'MDGM' ),
);
$args = array(
'label'                 => __( 'Slider', 'MDGM' ),
'description'           => __( 'Slider', 'MDGM' ),
'labels'                => $labels,
'supports'              => array( 'title', 'excerpt', 'thumbnail', ),
'taxonomies'            => array( 'Slides-cat' ),
'hierarchical'          => true,
'public'                => true,
'show_ui'               => true,
'show_in_menu'          => true,
'menu_position'         => 3,
'menu_icon'             => 'dashicons-images-alt2',
'show_in_admin_bar'     => true,
'show_in_nav_menus'     => true,
'can_export'            => true,
'has_archive'           => false,
'exclude_from_search'   => true,
'publicly_queryable'    => true,
'capability_type'       => 'page',
);
register_post_type( 'Slider', $args );

}
add_action( 'init', 'gm_slider', 0 );

function remove_menu_from_cpt() {
  global $submenu;
  $post_type = 'Slider';
  $tax_slug = 'category';
  if (isset($submenu['edit.php?post_type='.$post_type])) {
    foreach ($submenu['edit.php?post_type='.$post_type] as $k => $sub) {
      if (false !== strpos($sub[2],$tax_slug)) {
        unset($submenu['edit.php?post_type='.$post_type][$k]);
      }
    }
  }
}
add_action('admin_menu','remove_menu_from_cpt');

/**
 * Generated by the WordPress Meta Box generator
 * at http://jeremyhixon.com/tool/wordpress-meta-box-generator/
 */

function link_get_meta( $value ) {
	global $post;

	$field = get_post_meta( $post->ID, $value, true );
	if ( ! empty( $field ) ) {
		return is_array( $field ) ? stripslashes_deep( $field ) : stripslashes( wp_kses_decode_entities( $field ) );
	} else {
		return false;
	}
}

function link_add_meta_box() {
	add_meta_box(
		'link-link',
		__( 'Link', 'link' ),
		'link_html',
		'Slider',
		'normal',
		'default'
	);
}
add_action( 'add_meta_boxes', 'link_add_meta_box' );

function link_html( $post) {
	wp_nonce_field( '_link_nonce', 'link_nonce' ); ?>

	<p>
		<label for="link_link"><?php _e( 'link', 'link' ); ?></label><br>
		<input type="text" name="link_link" id="link_link" value="<?php echo link_get_meta( 'link_link' ); ?>">
	</p><?php
}

function link_save( $post_id ) {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	if ( ! isset( $_POST['link_nonce'] ) || ! wp_verify_nonce( $_POST['link_nonce'], '_link_nonce' ) ) return;
	if ( ! current_user_can( 'edit_post', $post_id ) ) return;

	if ( isset( $_POST['link_link'] ) )
		update_post_meta( $post_id, 'link_link', esc_attr( $_POST['link_link'] ) );
}
add_action( 'save_post', 'link_save' );

/*
	Usage: link_get_meta( 'link_link' )
*/
