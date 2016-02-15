<?php
// Register Custom Post Type
function clients() {

	$labels = array(
		'name'                  => _x( 'clients', 'Post Type General Name', 'MDGM' ),
		'singular_name'         => _x( 'clients', 'Post Type Singular Name', 'MDGM' ),
		'menu_name'             => __( 'Clients', 'MDGM' ),
		'name_admin_bar'        => __( 'Clients', 'MDGM' ),
		'archives'              => __( 'Clients', 'MDGM' ),
		'parent_item_colon'     => __( 'Clients', 'MDGM' ),
		'all_items'             => __( 'Clients', 'MDGM' ),
		'add_new_item'          => __( 'Add new client', 'MDGM' ),
		'add_new'               => __( 'Add client', 'MDGM' ),
		'new_item'              => __( 'New client', 'MDGM' ),
		'edit_item'             => __( 'Edit client', 'MDGM' ),
		'update_item'           => __( 'Update client', 'MDGM' ),
		'view_item'             => __( 'View client', 'MDGM' ),
		'search_items'          => __( 'Search client', 'MDGM' ),
		'not_found'             => __( 'Not Clients found', 'MDGM' ),
		'not_found_in_trash'    => __( 'Not Clients found in Trash', 'MDGM' ),
		'featured_image'        => __( 'Client logo', 'MDGM' ),
		'set_featured_image'    => __( 'Set client logo', 'MDGM' ),
		'remove_featured_image' => __( 'Remove client logo', 'MDGM' ),
		'use_featured_image'    => __( 'Use as client logo', 'MDGM' ),
		'insert_into_item'      => __( 'Insert into item', 'MDGM' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'MDGM' ),
		'items_list'            => __( 'Items list', 'MDGM' ),
		'items_list_navigation' => __( 'Items list navigation', 'MDGM' ),
		'filter_items_list'     => __( 'Filter items list', 'MDGM' ),
	);
	$args = array(
		'label'                 => __( 'clients', 'MDGM' ),
		'description'           => __( 'Post Type Description', 'MDGM' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'excerpt', 'thumbnail', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-groups',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,		
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'clients', $args );

}
add_action( 'init', 'clients', 0 );