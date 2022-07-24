<?php 

function tech_faq_cpt_init() {

 $labels = array(
    'name'               => _x( 'FAQ', 'post type general name' ),
    'singular_name'      => _x( 'FAQ', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'question' ),
    'add_new_item'       => __( 'Add New Question' ),
    'edit_item'          => __( 'Edit Question' ),
    'new_item'           => __( 'New Question' ),
    'all_items'          => __( 'All Questions' ),
    'view_item'          => __( 'View Question' ),
    'search_items'       => __( 'Search Questions' ),
    'not_found'          => __( 'No Questions found' ),
    'not_found_in_trash' => __( 'No Questions found in the Trash' ), 
    'parent_item_colon'  => __( 'Parent FAQs:', 'textdomain' ),
    'menu_name'          => 'Techflyte FAQ'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Techflyte Question portion',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title','editor'),
    'has_archive'   => true,
    'menu_icon'     =>'dashicons-edit-large'
  );


  register_post_type( 'faq', $args ); 
}