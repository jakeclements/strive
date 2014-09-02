<?php
function my_custom_post_staff() {
	$labels = array(
		'name'               => _x( 'Staff', 'post type general name' ),
		'singular_name'      => _x( 'Staff', 'post type singular name' ),
		'add_new'            => _x( 'Add Staff Member', 'book' ),
		'add_new_item'       => __( 'Add New Staff' ),
		'edit_item'          => __( 'Edit Staff' ),
		'new_item'           => __( 'New Staff' ),
		'all_items'          => __( 'All Staff' ),
		'view_item'          => __( 'View Staff' ),
		'search_items'       => __( 'Search Staff' ),
		'not_found'          => __( 'No Staff found' ),
		'not_found_in_trash' => __( 'No Staff found in the Trash' ), 
		'parent_item_colon'  => '',
		'menu_name'          => 'Staff'
	);
	$args = array(
		'labels'        => $labels,
		'description'   => 'Our team at Strive Health Management',
		'public'        => true,
		'menu_position' => 5,
		'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
		'has_archive'   => true,
		'capability_type' => 'post',
	);
	register_post_type( 'staff', $args );	
}
function my_custom_post_services() {
	$labels = array(
		'name'               => _x( 'Services', 'post type general name' ),
		'singular_name'      => _x( 'Service', 'post type singular name' ),
		'add_new'            => _x( 'Add Service', 'book' ),
		'add_new_item'       => __( 'Add New Service' ),
		'edit_item'          => __( 'Edit Service' ),
		'new_item'           => __( 'New Service' ),
		'all_items'          => __( 'All Services' ),
		'view_item'          => __( 'View Services' ),
		'search_items'       => __( 'Search Services' ),
		'not_found'          => __( 'No Services found' ),
		'not_found_in_trash' => __( 'No Services found in the Trash' ), 
		'parent_item_colon'  => '',
		'menu_name'          => 'Services'
	);
	$args = array(
		'labels'        => $labels,
		'description'   => 'Our services at Strive Health Management',
		'public'        => true,
		'menu_position' => 5,
		'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
		'has_archive'   => true,
		'capability_type' => 'post',
	);
	register_post_type( 'services', $args );	
}
function my_custom_post_testimonials() {
	$labels = array(
		'name'               => _x( 'Testimonials', 'post type general name' ),
		'singular_name'      => _x( 'Testimonial', 'post type singular name' ),
		'add_new'            => _x( 'Add Testimonial', 'book' ),
		'add_new_item'       => __( 'Add New Testimonial' ),
		'edit_item'          => __( 'Edit Testimonial' ),
		'new_item'           => __( 'New Testimonial' ),
		'all_items'          => __( 'All Testimonials' ),
		'view_item'          => __( 'View Testimonial' ),
		'search_items'       => __( 'Search Testimonials' ),
		'not_found'          => __( 'No Testimonial found' ),
		'not_found_in_trash' => __( 'No Testimonials found in the Trash' ), 
		'parent_item_colon'  => '',
		'menu_name'          => 'Testimonials'
	);
	$args = array(
		'labels'        => $labels,
		'description'   => 'Testimonials from Strive Clients',
		'public'        => true,
		'menu_position' => 5,
		'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
		'has_archive'   => true,
		'capability_type' => 'post',
	);
	register_post_type( 'testimonials', $args );	
}


	add_action( 'init', 'my_custom_post_staff' );
	add_action( 'init', 'my_custom_post_services' );
	add_action( 'init', 'my_custom_post_testimonials' );
if (function_exists('register_field')) { 
  	register_field('Categories_field', dirname(__File__) . '/acf-addons-master/categories.php'); 
  	register_field('Unique_key_field', dirname(__File__) . '/acf-addons-master/unique_key.php'); 
  	register_field('acf_time_picker', dirname(__File__) . '/acf_time_picker/acf_time_picker.php');
}
	add_theme_support( 'menus' );
	add_image_size( 'slide-img', 960, 422 );
	add_image_size( 'home-mod', 218, 213 );
	add_image_size( 'staff-mod', 200, 300 );
	add_image_size( 'home-postthumb', 105, 107 );
	add_image_size( 'gallery-thumb', 130, 130, true );
	add_image_size( 'sidebar-thumb', 286, 118 );
	add_theme_support( 'post-thumbnails' );

function remove_menus () {
global $menu;
	$restricted = array(__('Dashboard'), __('Links'), __('Comments'), __('Contact'), __('Plugins'), __('Plugins'));
	end ($menu);
	while (prev($menu)){
		$value = explode(' ',$menu[key($menu)][0]);
		if(in_array($value[0] != NULL?$value[0]:"" , $restricted)){unset($menu[key($menu)]);}
	}
}
add_action('admin_menu', 'remove_menus');	
	function hide_admin_menu()
{
	global $current_user;
	get_currentuserinfo();
 
	if($current_user->user_login = 'admin')
	{
		echo '<style type="text/css">#toplevel_page_edit-post_type-acf{display:none;}</style>';
	}
}
 
add_action('admin_head', 'hide_admin_menu');	
?>