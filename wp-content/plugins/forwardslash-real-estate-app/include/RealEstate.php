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
		        'name'                => _x( 'Real Estates', 'Post Type General Name', 'development' ),
		        'singular_name'       => _x( 'Real Estate', 'Post Type Singular Name', 'development' ),
		        'menu_name'           => __( 'Real Estates', 'development' ),
		        'parent_item_colon'   => __( 'Parent Real Estate', 'development' ),
		        'all_items'           => __( 'All Real Estates', 'development' ),
		        'view_item'           => __( 'View Real Estate', 'development' ),
		        'add_new_item'        => __( 'Add New Real Estate', 'development' ),
		        'add_new'             => __( 'Add New', 'development' ),
		        'edit_item'           => __( 'Edit Real Estate', 'development' ),
		        'update_item'         => __( 'Update Real Estate', 'development' ),
		        'search_items'        => __( 'Search Real Estate', 'development' ),
		        'not_found'           => __( 'Not Found', 'development' ),
		        'not_found_in_trash'  => __( 'Not found in Trash', 'development' )
	    	);

		    $args = array(
		        'label'               => __( 'real-estates', 'development' ),
		        'description'         => __( 'Real Estate news and reviews', 'development' ),
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