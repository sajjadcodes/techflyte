<?php 

function tech_benefits_cpt_init() {

 $labels = array(
    'name'               => _x( 'Loyalty Program', 'post type general name' ),
    'singular_name'      => _x( 'Benefit', 'post type singular name' ),
    'add_new'            => _x( 'Add Benefit', 'member' ),
    'add_new_item'       => __( 'Add New Benefit' ),
    'edit_item'          => __( 'Edit Benefit' ),
    'new_item'           => __( 'New Benefit' ),
    'all_items'          => __( 'All Benefits' ),
    'view_item'          => __( 'View Benefit' ),
    'search_items'       => __( 'Search Benefits' ),
    'not_found'          => __( 'No Benefits found' ),
    'not_found_in_trash' => __( 'No Benefits found in the Trash' ), 
    'parent_item_colon'  => ’,
    'menu_name'          => 'Techflyte Benefits'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Techflyte Loyalty Benefit portion',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title','thumbnail'),
    'has_archive'   => true,
    'menu_icon'     =>'dashicons-awards',
    'order'         =>'DESC'
  );


  register_post_type( 'benefits', $args ); 
}