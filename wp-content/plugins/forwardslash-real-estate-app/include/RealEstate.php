<?php

if( !class_exists('RealEstate') ){

	class RealEstate
	{
		public function __construct()
		{
			add_action('init', array($this, 'registerRealEstate'));
		}

		public function registerRealEstate()
		{
			$labels = array(
		        'name'                => _x( 'Real Estates', 'Post Type General Name', 'forwardslash-real-estate-theme' ),
		        'singular_name'       => _x( 'Real Estate', 'Post Type Singular Name', 'forwardslash-real-estate-theme' ),
		        'menu_name'           => __( 'Real Estates', 'forwardslash-real-estate-theme' ),
		        'parent_item_colon'   => __( 'Parent Real Estate', 'forwardslash-real-estate-theme' ),
		        'all_items'           => __( 'All Real Estates', 'forwardslash-real-estate-theme' ),
		        'view_item'           => __( 'View Real Estate', 'forwardslash-real-estate-theme' ),
		        'add_new_item'        => __( 'Add New Real Estate', 'forwardslash-real-estate-theme' ),
		        'add_new'             => __( 'Add New', 'forwardslash-real-estate-theme' ),
		        'edit_item'           => __( 'Edit Real Estate', 'forwardslash-real-estate-theme' ),
		        'update_item'         => __( 'Update Real Estate', 'forwardslash-real-estate-theme' ),
		        'search_items'        => __( 'Search Real Estate', 'forwardslash-real-estate-theme' ),
		        'not_found'           => __( 'Not Found', 'forwardslash-real-estate-theme' ),
		        'not_found_in_trash'  => __( 'Not found in Trash', 'forwardslash-real-estate-theme' )
	    	);

		    $args = array(
		        'label'               => __( 'real-estates', 'forwardslash-real-estate-theme' ),
		        'description'         => __( 'Real Estate news and reviews', 'forwardslash-real-estate-theme' ),
		        'labels'              => $labels,
		        'supports'            => array( 'title', 'editor', 'thumbnail' ),
		        'taxonomies'          => array(),
		        'hierarchical'        => false,
		        'public'              => true,
		        'show_ui'             => true,
		        'show_in_menu'        => true,
		        'show_in_nav_menus'   => true,
		        'show_in_admin_bar'   => true,
		        'menu_position'       => 5,
		        'can_export'          => true,
		        'has_archive'         => true,
		        'exclude_from_search' => false,
		        'publicly_queryable'  => true,
		        'capability_type'     => 'page'
		    );

    		register_post_type( 'real-estates', $args );
		}
	}

}

?>