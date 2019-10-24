<?php
/**
* Plugin Name: Forwardslash Real Estate App
* Plugin URI: http://development.com/plugins/forwardslash-real-estate-app/
* Description: This is Forwardslash Real Estate App plugin for development
* Version: 1.0
* Requires at least: 5.2
* Requires PHP: 7.1
* Author: Jovan Dosen
* Author URI: https://jovandosen.com/
* License: GPL v2 or later
* License URI: https://www.gnu.org/licenses/gpl-2.0.html
* Text Domain: forwardslash-real-estate-app
* Domain Path: /languages

{Plugin Name} is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
{Plugin Name} is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with {Plugin Name}. If not, see {License URI}.
*/

if( !defined('ABSPATH') ){
	exit();
}

if( !class_exists('ForwardslashRealEstateApp') ){

	class ForwardslashRealEstateApp
	{
		public function __construct()
		{
			add_action('plugins_loaded', array($this, 'boot'));
		}

		public function boot()
		{
			echo 'Forwardslash Real Estate App works well and good.';
		}

		public static function create()
		{
			return new self();
		}
	}

	ForwardslashRealEstateApp::create();

}

?>