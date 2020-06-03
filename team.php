<?php 
function team_register() {

	$labels = array(
		'name' => _x('Team', 'post type general name'),
		'singular_name' => _x('Team member', 'post type singular name'),
		'add_new' => _x('Add New', 'Team Member'),
		'add_new_item' => __('Add New Team Member'),
		'edit_item' => __('Edit Team Member'),
		'new_item' => __('New Team Member'),
		'view_item' => __('View Team Member'),
		'search_items' => __('Search Team Member'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'menu_icon' => 'dashicons-businessman',
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
        'supports' => array('title','editor','thumbnail','excerpt','custom-fields'),
        // 'show_in_rest'       => true
	  ); 

	register_post_type( 'team' , $args );
}


