<?php 

function tech_partner_cpt_init() {

 $labels = array(
    'name'               => _x( 'Partner', 'post type general name' ),
    'singular_name'      => _x( 'Partner', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'partner' ),
    'add_new_item'       => __( 'Add New Partner'),
    'edit_item'          => __( 'Edit Partner' ),
    'new_item'           => __( 'New Partner' ),
    'all_items'          => __( 'All Partner' ),
    'view_item'          => __( 'View Partner' ),
    'search_items'       => __( 'Search Partner' ),
    'not_found'          => __( 'No Partner found' ),
    'not_found_in_trash' => __( 'No Partner found in the Trash' ), 
    'parent_item_colon'  => ’,
    'menu_name'          => 'Techflyte Partner'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Techflyte Partner portion',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title','editor','thumbnail'),
    'has_archive'   => true,
    'menu_icon'     =>'dashicons-groups'
  );


  register_post_type( 'partner', $args ); 
}