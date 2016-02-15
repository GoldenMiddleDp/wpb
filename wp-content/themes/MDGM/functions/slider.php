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