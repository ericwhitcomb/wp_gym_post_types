<?php
/*
 * Plugin Name: WP Gym - Post Types
 * Plugin URI: 
 * Description: Add Custom Post Types into WordPress for WP Gym
 * Version: 1.0.0
 * Author: Eric Whitcomb
 * Author URI: http://www.ericwhitcomb.com/
 * Text Domain: wp_gym
 */ 

if (!defined('ABSPATH')) die();

// Register post type for classes
function wp_gym_class_post_type() {

	$labels = array(
		'name'                  => _x( 'Classes', 'Post Type General Name', 'wp_gym' ),
		'singular_name'         => _x( 'Class', 'Post Type Singular Name', 'wp_gym' ),
		'menu_name'             => __( 'Classes', 'wp_gym' ),
		'name_admin_bar'        => __( 'Classes', 'wp_gym' ),
		'archives'              => __( 'Archive', 'wp_gym' ),
		'attributes'            => __( 'Attributes', 'wp_gym' ),
		'parent_item_colon'     => __( 'Parent Class', 'wp_gym' ),
		'all_items'             => __( 'All Classes', 'wp_gym' ),
		'add_new_item'          => __( 'Add Class', 'wp_gym' ),
		'add_new'               => __( 'Add Class', 'wp_gym' ),
		'new_item'              => __( 'New Class', 'wp_gym' ),
		'edit_item'             => __( 'Edit Class', 'wp_gym' ),
		'update_item'           => __( 'Update Class', 'wp_gym' ),
		'view_item'             => __( 'View Class', 'wp_gym' ),
		'view_items'            => __( 'View Class', 'wp_gym' ),
		'search_items'          => __( 'Search Class', 'wp_gym' ),
		'not_found'             => __( 'Not found', 'wp_gym' ),
		'not_found_in_trash'    => __( 'Not found in trash', 'wp_gym' ),
		'featured_image'        => __( 'Featured Image', 'wp_gym' ),
		'set_featured_image'    => __( 'Save Featured Image', 'wp_gym' ),
		'remove_featured_image' => __( 'Remove Featured Image', 'wp_gym' ),
		'use_featured_image'    => __( 'Use as Featured Image', 'wp_gym' ),
		'insert_into_item'      => __( 'Insert in Class', 'wp_gym' ),
		'uploaded_to_this_item' => __( 'Add in Class', 'wp_gym' ),
		'items_list'            => __( 'Classes List', 'wp_gym' ),
		'items_list_navigation' => __( 'Navigate to Classes', 'wp_gym' ),
		'filter_items_list'     => __( 'Filter Classes', 'wp_gym' ),
	);
	$args = array(
		'label'                 => __( 'Class', 'wp_gym' ),
		'description'           => __( 'Classes for wp_gym Website', 'wp_gym' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-welcome-learn-more',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
    'show_in_rest'          => false // set to true to enable gutenberg
	);
	register_post_type( 'wp_gym_classes', $args );

}
add_action( 'init', 'wp_gym_class_post_type', 0 );

// Register post type for instructors
function wp_gym_instructor_post_type() {

	$labels = array(
		'name'                  => _x( 'Instructors', 'Post Type General Name', 'wp_gym' ),
		'singular_name'         => _x( 'Instructor', 'Post Type Singular Name', 'wp_gym' ),
		'menu_name'             => __( 'Instructors', 'wp_gym' ),
		'name_admin_bar'        => __( 'Instructor', 'wp_gym' ),
		'archives'              => __( 'Archive', 'wp_gym' ),
		'attributes'            => __( 'Attributes', 'wp_gym' ),
		'parent_item_colon'     => __( 'Parent Instructor', 'wp_gym' ),
		'all_items'             => __( 'All Instructors', 'wp_gym' ),
		'add_new_item'          => __( 'Add Instructor', 'wp_gym' ),
		'add_new'               => __( 'Add Instructor', 'wp_gym' ),
		'new_item'              => __( 'New Instructor', 'wp_gym' ),
		'edit_item'             => __( 'Edit Instructor', 'wp_gym' ),
		'update_item'           => __( 'Update Instructor', 'wp_gym' ),
		'view_item'             => __( 'View Instructor', 'wp_gym' ),
		'view_items'            => __( 'View Instructors', 'wp_gym' ),
		'search_items'          => __( 'Search Instructor', 'wp_gym' ),
		'not_found'             => __( 'Not Found', 'wp_gym' ),
		'not_found_in_trash'    => __( 'Not Found in Trash', 'wp_gym' ),
		'featured_image'        => __( 'Featured Image', 'wp_gym' ),
		'set_featured_image'    => __( 'Save Featured Image', 'wp_gym' ),
		'remove_featured_image' => __( 'Remove Featured Image', 'wp_gym' ),
		'use_featured_image'    => __( 'Use as Featured Image', 'wp_gym' ),
		'insert_into_item'      => __( 'Insert in Instructor', 'wp_gym' ),
		'uploaded_to_this_item' => __( 'Add in Instructor', 'wp_gym' ),
		'items_list'            => __( 'List Instructors', 'wp_gym' ),
		'items_list_navigation' => __( 'Navigate to Instructors', 'wp_gym' ),
		'filter_items_list'     => __( 'Filter Instructors', 'wp_gym' ),
	);
	$args = array(
		'label'                 => __( 'Instructors', 'wp_gym' ),
		'description'           => __( 'Instructors for website', 'wp_gym' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 7,
        'menu_icon'             => 'dashicons-admin-users',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
    'show_in_rest'          => false // set to true to enable gutenberg
	);
	register_post_type( 'wp_gym_instructors', $args );

}
add_action( 'init', 'wp_gym_instructor_post_type', 0 );

// Register post type for testimonials
function wp_gym_testimonial_post_type() {

	$labels = array(
		'name'                  => _x( 'Testimonials', 'Post Type General Name', 'wp_gym' ),
		'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', 'wp_gym' ),
		'menu_name'             => __( 'Testimonials', 'wp_gym' ),
		'name_admin_bar'        => __( 'Testimonial', 'wp_gym' ),
		'archives'              => __( 'Archive', 'wp_gym' ),
		'attributes'            => __( 'Attributes', 'wp_gym' ),
		'parent_item_colon'     => __( 'Parent Testimonial ', 'wp_gym' ),
		'all_items'             => __( 'All Testimonials', 'wp_gym' ),
		'add_new_item'          => __( 'Add Testimonial', 'wp_gym' ),
		'add_new'               => __( 'Add Testimonial', 'wp_gym' ),
		'new_item'              => __( 'New Testimonial', 'wp_gym' ),
		'edit_item'             => __( 'Edit Testimonial', 'wp_gym' ),
		'update_item'           => __( 'Update Testimonial', 'wp_gym' ),
		'view_item'             => __( 'View Testimonial', 'wp_gym' ),
		'view_items'            => __( 'View Testimonials', 'wp_gym' ),
		'search_items'          => __( 'Search Testimonial', 'wp_gym' ),
		'not_found'             => __( 'Not found in Trash', 'wp_gym' ),
		'featured_image'        => __( 'Featured Image', 'wp_gym' ),
		'set_featured_image'    => __( 'Save Featured Image', 'wp_gym' ),
		'remove_featured_image' => __( 'Remove Featured Image', 'wp_gym' ),
		'use_featured_image'    => __( 'Use as Featured Image', 'wp_gym' ),
		'insert_into_item'      => __( 'Insert Into Testimonial', 'wp_gym' ),
		'uploaded_to_this_item' => __( 'Add At Testimonial', 'wp_gym' ),
		'items_list'            => __( 'Testimonial List', 'wp_gym' ),
		'items_list_navigation' => __( 'Navigate toTestimonials', 'wp_gym' ),
		'filter_items_list'     => __( 'Filter Testimonials', 'wp_gym' ),
	);
	$args = array(
		'label'                 => __( 'Testimonials', 'wp_gym' ),
		'description'           => __( 'Testimonials para el Sitio Web', 'wp_gym' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 8,
        'menu_icon'             => 'dashicons-editor-quote',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
    'show_in_rest'          => false // set to true to enable gutenberg
	);
	register_post_type( 'wp_gym_testimonials', $args );

}
add_action( 'init', 'wp_gym_testimonial_post_type', 0 );
?>