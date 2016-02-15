<?php
// Register Custom Post Type
function Reviews() {

	$labels = array(
		'name'                  => _x( 'reviews', 'Post Type General Name', 'MDGM' ),
		'singular_name'         => _x( 'reviews', 'Post Type Singular Name', 'MDGM' ),
		'menu_name'             => __( 'Reviews', 'MDGM' ),
		'name_admin_bar'        => __( 'Reviews', 'MDGM' ),
		'archives'              => __( 'Reviews', 'MDGM' ),
		'parent_item_colon'     => __( 'Reviews', 'MDGM' ),
		'all_items'             => __( 'Reviews', 'MDGM' ),
		'add_new_item'          => __( 'Add new review', 'MDGM' ),
		'add_new'               => __( 'Add review', 'MDGM' ),
		'new_item'              => __( 'New review', 'MDGM' ),
		'edit_item'             => __( 'Edit review', 'MDGM' ),
		'update_item'           => __( 'Update review', 'MDGM' ),
		'view_item'             => __( 'View review', 'MDGM' ),
		'search_items'          => __( 'Search review', 'MDGM' ),
		'not_found'             => __( 'Not reviews found', 'MDGM' ),
		'not_found_in_trash'    => __( 'Not reviews found in Trash', 'MDGM' ),
		'featured_image'        => __( 'Reviewer picture', 'MDGM' ),
		'set_featured_image'    => __( 'Set reviewer picture', 'MDGM' ),
		'remove_featured_image' => __( 'Remove reviewer picture', 'MDGM' ),
		'use_featured_image'    => __( 'Use as reviewer picture', 'MDGM' ),
		'insert_into_item'      => __( 'Insert into item', 'MDGM' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'MDGM' ),
		'items_list'            => __( 'Items list', 'MDGM' ),
		'items_list_navigation' => __( 'Items list navigation', 'MDGM' ),
		'filter_items_list'     => __( 'Filter items list', 'MDGM' ),
	);
	$args = array(
		'label'                 => __( 'reviews', 'MDGM' ),
		'description'           => __( 'Post Type Descriptionlients', 'MDGM' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 6,
		'menu_icon'             => 'dashicons-testimonial',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,		
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'reviews', $args );

}
add_action( 'init', 'Reviews', 0 );
