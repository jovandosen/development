<?php

class ForwardslashRealEstateAppAssets
{
	public function __construct()
	{
		add_action('wp_enqueue_scripts', array($this, 'loadAssets'));
	}

	public function loadAssets()
	{
		wp_register_script('js', plugins_url('/forwardslash-real-estate-app/assets/js/app.js'), array('jquery'),'1.1', true);
		wp_enqueue_script('js');

		wp_register_style('css', plugins_url('/forwardslash-real-estate-app/assets/css/app.css'));
		wp_enqueue_style('css');
	}
}

?>