<?php

if( !class_exists('RealEstateType') ){

	class RealEstateType
	{
		public function __construct()
		{
			add_action('init', array($this, 'registerType'));
		}

		public function registerType()
		{
			$labels = array(
		        'name'          => 'Types',
		        'singular_name' => 'Type',
		        'edit_item'     => 'Edit Type',
		        'update_item'   => 'Update Type',
		        'add_new_item'  => 'Add New Type',
		        'menu_name'     => 'Types'
    		);
    	
		    $args = array(
		        'hierarchical'      => false,
		        'labels'            => $labels,
		        'show_ui'           => true,
		        'show_admin_column' => true,
		        'rewrite'           => array( 'slug' => 'estates' )
		    );

    		register_taxonomy( 'type', 'real-estates', $args );
		}
	}

}

?>