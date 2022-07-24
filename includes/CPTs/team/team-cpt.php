<?php 


function tech_team_cpt_init() {

 $labels = array(
    'name'               => _x( 'Team', 'post type general name' ),
    'singular_name'      => _x( 'Member', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'member' ),
    'add_new_item'       => __( 'Add New Member' ),
    'edit_item'          => __( 'Edit Member' ),
    'new_item'           => __( 'New Member' ),
    'all_items'          => __( 'All Members' ),
    'view_item'          => __( 'View Member' ),
    'search_items'       => __( 'Search Members' ),
    'not_found'          => __( 'No Members found' ),
    'not_found_in_trash' => __( 'No Members found in the Trash' ), 
    'menu_name'          => 'Techflyte Team'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Techflyte Team member portion',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'thumbnail', 'excerpt'),
    'has_archive'   => true,
    'menu_icon'     =>'dashicons-businessman',
    'rewrite'            => array( 'slug' => 'member' ),
  );


  register_post_type( 'team', $args ); 
}

add_action('init', 'tech_team_cpt_init');

// function my_rewrite_flush() {
//     tech_team_cpt_init();
//     flush_rewrite_rules();
// }