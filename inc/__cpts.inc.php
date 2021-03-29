<?php
/**
 * Custom posts
 * @package Toborino
*/
// Iniciativas
function Portfolio() {

	$labels = array(
		'name'                  => _x( 'Portfólio', 'Post Type General Name', 'toborino' ),
		'singular_name'         => _x( 'Portfólio', 'Post Type Singular Name', 'toborino' ),
		'menu_name'             => __( 'Portfólio', 'toborino' ),
	);
	$args = array(
		'label'                 => __( 'Portfólio', 'toborino' ),
		'description'           => __( 'Tipo de post para portflio da Toborino', 'toborino' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'taxonomies'            => array( 'category','post_tag' ),
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 20,
		'menu_icon'             => 'dashicons-products',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'portfolio', $args );

}
add_action( 'init', 'Portfolio', 0 );

// Parceiros
function Parceiros() {

	$labels = array(
		'name'                  => _x( 'Parceiros', 'Post Type General Name', 'toborino' ),
		'singular_name'         => _x( 'Parceiro', 'Post Type Singular Name', 'toborino' ),
		'menu_name'             => __( 'Parceiros', 'toborino' ),
	);
	$args = array(
		'label'                 => __( 'Parceiros', 'toborino' ),
		'description'           => __( 'Tipo de post para parceiros do Inova USP', 'toborino' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 20,
		'menu_icon'             => 'dashicons-groups',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'parceiros', $args );

}
add_action( 'init', 'Parceiros', 0 );