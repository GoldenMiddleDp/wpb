<?php
// Register Custom Post Type
function Our_team() {

	$labels = array(
		'name'                  => _x( 'team', 'Post Type General Name', 'MDGM' ),
		'singular_name'         => _x( 'team', 'Post Type Singular Name', 'MDGM' ),
		'menu_name'             => __( 'Team', 'MDGM' ),
		'name_admin_bar'        => __( 'Team', 'MDGM' ),
		'archives'              => __( 'Team', 'MDGM' ),
		'parent_item_colon'     => __( 'Team', 'MDGM' ),
		'all_items'             => __( 'Team', 'MDGM' ),
		'add_new_item'          => __( 'Add new member', 'MDGM' ),
		'add_new'               => __( 'Add member', 'MDGM' ),
		'new_item'              => __( 'New member', 'MDGM' ),
		'edit_item'             => __( 'Edit member', 'MDGM' ),
		'update_item'           => __( 'Update member', 'MDGM' ),
		'view_item'             => __( 'View member', 'MDGM' ),
		'search_items'          => __( 'Search member', 'MDGM' ),
		'not_found'             => __( 'Not members found', 'MDGM' ),
		'not_found_in_trash'    => __( 'Not members found in Trash', 'MDGM' ),
		'featured_image'        => __( 'Member photo', 'MDGM' ),
		'set_featured_image'    => __( 'Set member photo', 'MDGM' ),
		'remove_featured_image' => __( 'Remove member photo', 'MDGM' ),
		'use_featured_image'    => __( 'Use as member photo', 'MDGM' ),
		'insert_into_item'      => __( 'Insert into item', 'MDGM' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'MDGM' ),
		'items_list'            => __( 'Items list', 'MDGM' ),
		'items_list_navigation' => __( 'Items list navigation', 'MDGM' ),
		'filter_items_list'     => __( 'Filter items list', 'MDGM' ),
	);
	$args = array(
		'label'                 => __( 'team', 'MDGM' ),
		'description'           => __( 'Post Type Descriptionlients', 'MDGM' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'excerpt', 'thumbnail', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 4,
		'menu_icon'             => 'dashicons-id-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,		
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'team', $args );

}
add_action( 'init', 'Our_team', 0 );