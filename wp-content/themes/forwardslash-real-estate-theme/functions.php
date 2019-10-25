<?php

function addFeatures()
{
	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'automatic-feed-links' );
}

add_action('after_setup_theme', 'addFeatures');

function loadRealEstateThemeAssets()
{
	wp_enqueue_style('realestatecss', get_template_directory_uri() . '/css/real-estate-theme.css', false, '1.1', 'all');
	wp_enqueue_script('realestatejs', get_template_directory_uri() . '/js/real-estate-theme.js', array('jquery'), 1.1, true);
}

add_action('wp_enqueue_scripts', 'loadRealEstateThemeAssets');

?>