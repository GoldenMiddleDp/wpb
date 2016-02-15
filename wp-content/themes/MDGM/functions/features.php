<?php
// Register Custom Post Type
function features() {

	$labels = array(
		'name'                  => _x( 'Features', 'Post Type General Name', 'MDGM' ),
		'singular_name'         => _x( 'Features', 'Post Type Singular Name', 'MDGM' ),
		'menu_name'             => __( 'Features', 'MDGM' ),
		'name_admin_bar'        => __( 'Features', 'MDGM' ),
		'archives'              => __( 'Features Archives', 'MDGM' ),
		'parent_item_colon'     => __( 'Feature', 'MDGM' ),
		'all_items'             => __( 'All features', 'MDGM' ),
		'add_new_item'          => __( 'Add New feature', 'MDGM' ),
		'add_new'               => __( 'Add feature', 'MDGM' ),
		'new_item'              => __( 'New feature', 'MDGM' ),
		'edit_item'             => __( 'Edit feature', 'MDGM' ),
		'update_item'           => __( 'Update feature', 'MDGM' ),
		'view_item'             => __( 'View feature', 'MDGM' ),
		'search_items'          => __( 'Search feature', 'MDGM' ),
		'not_found'             => __( 'Not found', 'MDGM' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'MDGM' ),
		'featured_image'        => __( 'Featured Image', 'MDGM' ),
		'set_featured_image'    => __( 'Set featured image', 'MDGM' ),
		'remove_featured_image' => __( 'Remove featured image', 'MDGM' ),
		'use_featured_image'    => __( 'Use as featured image', 'MDGM' ),
		'insert_into_item'      => __( 'Insert into item', 'MDGM' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'MDGM' ),
		'items_list'            => __( 'Items list', 'MDGM' ),
		'items_list_navigation' => __( 'Items list navigation', 'MDGM' ),
		'filter_items_list'     => __( 'Filter items list', 'MDGM' ),
	);
	$args = array(
		'label'                 => __( 'Features', 'MDGM' ),
		'description'           => __( 'Post Type Description', 'MDGM' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'excerpt', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 7,
		'menu_icon'             => 'dashicons-info',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,		
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'features', $args );

}
add_action( 'init', 'features', 0 );



function icon_get_meta( $value ) {
	global $post;

	$field = get_post_meta( $post->ID, $value, true );
	if ( ! empty( $field ) ) {
		return is_array( $field ) ? stripslashes_deep( $field ) : stripslashes( wp_kses_decode_entities( $field ) );
	} else {
		return false;
	}
}

function icon_add_meta_box() {
	add_meta_box(
		'icon-icon',
		__( 'Icon', 'icon' ),
		'icon_html',
		'dashboard',
		'normal',
		'default'
	);
	add_meta_box(
		'icon-icon',
		__( 'Icon', 'icon' ),
		'icon_html',
		'Features',
		'normal',
		'default'
	);
}
add_action( 'add_meta_boxes', 'icon_add_meta_box' );

function icon_html( $post) {
	wp_nonce_field( '_icon_nonce', 'icon_nonce' ); ?>

	<p>
		<label for="icon_icon_class"><?php _e( 'Icon class', 'icon' ); ?></label><br>
		<input type="text" name="icon_icon_class" id="icon_icon_class" value="<?php echo icon_get_meta( 'icon_icon_class' ); ?>">
	</p><?php
}

function icon_save( $post_id ) {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	if ( ! isset( $_POST['icon_nonce'] ) || ! wp_verify_nonce( $_POST['icon_nonce'], '_icon_nonce' ) ) return;
	if ( ! current_user_can( 'edit_post', $post_id ) ) return;

	if ( isset( $_POST['icon_icon_class'] ) )
		update_post_meta( $post_id, 'icon_icon_class', esc_attr( $_POST['icon_icon_class'] ) );
}
add_action( 'save_post', 'icon_save' );

/*
	Usage: icon_get_meta( 'icon_icon_class' )
*/
