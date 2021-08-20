<?php
/*
 * Plugin Name: WP Gym - Post Types
 * Plugin URI: 
 * Description: Adds a new Post Type into WordPress
 * Version: 1.0.0
 * Author: Eric Whitcomb
 * Author URI: http://www.ericwhitcomb.com/
 * Text Domain: wp_gym
 */ 

if (!defined('ABSPATH')) die();

// Register new Custom Post Type
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
?>