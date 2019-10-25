<!DOCTYPE html>
<html lang="en">
	<head>
		<title><?php echo get_bloginfo('name'); ?></title>
		<meta charset="utf-8">
		<meta name="description" content="<?php echo get_bloginfo('description'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php wp_head(); ?>
	</head>
	<body>
		<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>