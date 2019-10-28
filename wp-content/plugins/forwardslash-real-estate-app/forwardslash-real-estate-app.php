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

require 'include/ForwardslashRealEstateAppAssets.php';
require 'include/RealEstate.php';
require 'include/RealEstateLocation.php';
require 'include/RealEstateType.php';

require __DIR__ . '/../advanced-custom-fields/acf.php';

if( !class_exists('ForwardslashRealEstateApp') ){

	class ForwardslashRealEstateApp
	{
		public function __construct()
		{
			add_action('plugins_loaded', array($this, 'boot'));
			add_action('admin_init', array($this, 'checkAcfActive'));
			add_filter('acf/settings/url', array($this, 'includeAcfSettings'));
		}

		public function boot()
		{
			$appAssets = new ForwardslashRealEstateAppAssets(); // app assets ( css, js, images )
			$realEstate = new RealEstate(); // custom post type Real Estate
			$realEstateLocation = new RealEstateLocation(); // taxonomy Location
			$realEstateType = new RealEstateType(); // taxonomy Type
		}

		public function checkAcfActive()
		{
			if( !is_plugin_active('advanced-custom-fields/acf.php') ){

				add_action('admin_notices', array($this, 'realEstateAppNotice'));

				deactivate_plugins( plugin_basename( __FILE__ ) ); 

		        if ( isset( $_GET['activate'] ) ) {
		            unset( $_GET['activate'] );
		        }

			} 
		}

		public function realEstateAppNotice()
		{
    		?>
    		<div class="error"><p>Sorry, but Forwardslash Real Estate App Plugin requires the Advanced Custom Fields plugin to be installed and active.</p></div>
    		<?php
		}

		public function includeAcfSettings()
		{
			return __DIR__ . '/../advanced-custom-fields/acf.php';
		}

		public static function create()
		{
			return new self();
		}
	}

	ForwardslashRealEstateApp::create();

}

?>