  <?php


function team_register_cpt(){

                    $labels = array(
                'name'               => __( 'Employees' ),
                'singular_name'      => __( 'Employee' ),
                'add_new'            => __( 'Add New Employee' ),
                'add_new_item'       => __( 'Add New member' ),
                'edit_item'          => __( 'Edit Employee' ),
                'new_item'           => __( 'Add New Employee' ),
                'view_item'          => __( 'View Employee' ),
                'search_items'       => __( 'Search Employee' ),
                'not_found'          => __( 'No employee found' ),
                'not_found_in_trash' => __( 'No employee found in trash' )

                );
               
             
            $args= array(
                'labels'                =>$labels,
                'public'                =>true,
                'capability_type'       =>'post',
                'rewrite'               =>array('slug'=>'employees'),
                'has_archive'           =>true,
                'menu_position'         =>40,
                'menu_icon'             =>'dashicons-businessperson',
                'supports'              =>array('title','thumbnail','custom-fields'),
                'register_meta_box_cb'  =>'wpt_add_employee_metaboxes',


            );

        register_post_type('employee',$args);

}
  
  
  
  function wpt_add_employee_metaboxes() {
	add_meta_box(
		'wpt_employee_description_id',
		'Description',
		'wpt_employee_name_description',
		'employee',
		'normal',
		'high'
    );
    add_meta_box(
		'wpt_employee_facebook_id',
		'Facebook url',
		'wpt_employee_facebook_link',
		'employee',
		'normal',
		'default'
    );
    add_meta_box(
		'wpt_employee_insta_id',
		'Instagram url',
		'wpt_employee_insta_link',
		'employee',
		'normal',
		'default'
    );
     add_meta_box(
		'wpt_employee_twitter_id',
		'Twitter url',
		'wpt_employee_twitter_link',
		'employee',
		'normal',
		'default'
    );
     add_meta_box(
		'wpt_employee_linkedin_id',
		'Linkedin url',
		'wpt_employee_linkedin_link',
		'employee',
		'advanced',
		'default'
	);
}




function wpt_employee_name_description() {
	global $post;

	// Nonce field to validate form request came from current site
	wp_nonce_field( basename( __FILE__ ), 'event_fields' );

	// Get the location data if it's already been entered
	$description = get_post_meta( $post->ID, 'location', true );

	// Output the field
	echo '<input type="text" name="location" value="' . esc_textarea( $description )  . '" class="widefat">';

}

function wpt_employee_facebook_link() {
	global $post;

	// Nonce field to validate form request came from current site
	wp_nonce_field( basename( __FILE__ ), 'event_fields' );

	// Get the location data if it's already been entered
	$fb_url = get_post_meta( $post->ID, 'location', true );

	// Output the field
	echo '<input type="url" name="location" value="' . esc_textarea( $fb_url )  . '" class="widefat">';

}

function wpt_employee_insta_link() {
	global $post;

	// Nonce field to validate form request came from current site
	wp_nonce_field( basename( __FILE__ ), 'event_fields' );

	// Get the location data if it's already been entered
	$insta_url = get_post_meta( $post->ID, 'location', true );

	// Output the field
	echo '<input type="url" name="location" value="' . esc_textarea( $insta_url )  . '" class="widefat">';

}

function wpt_employee_twitter_link() {
	global $post;

	// Nonce field to validate form request came from current site
	wp_nonce_field( basename( __FILE__ ), 'event_fields' );

	// Get the location data if it's already been entered
	$twitter_url = get_post_meta( $post->ID, 'location', true );

	// Output the field
	echo '<input type="url" name="location" value="' . esc_textarea( $twitter_url )  . '" class="widefat">';

}
function wpt_employee_linkedin_link() {
	global $post;

	// Nonce field to validate form request came from current site
	wp_nonce_field( basename( __FILE__ ), 'event_fields' );

	// Get the location data if it's already been entered
	$linkedin_url = get_post_meta( $post->ID, 'location', true );

	// Output the field
	echo '<input type="url" name="location" value="' . esc_textarea( $linkedin_url )  . '" class="widefat">';

}