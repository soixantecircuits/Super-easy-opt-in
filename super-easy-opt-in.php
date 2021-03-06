<?php

// THIS IS A COMMENT WITH A TEMPLATE ENTRY Super Easy Opt-in

/**
 * The WordPress Plugin Boilerplate.
 *
 * A foundation off of which to build well-documented WordPress plugins that
 * also follow WordPress Coding Standards and PHP best practices.
 *
* @package   Super_Easy_Opt_In
* @author    Soixante circuits gabriel@soixantecircuits.fr
* @license   GPL-2.0+
* @link      http://soixantecircuits.fr
* @copyright 2014 Soixante circuits
 *
 * @wordpress-plugin
 * Plugin Name:       Super Easy Opt-in
 * Plugin URI:        
 * Description:       A simple plugin that loads an optin :)
 * Version:           1.0.0
 * Author:            Soixante circuits
 * Author URI:        http://soixantecircuits.fr
 * Text Domain:       plugin-name-locale
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages
 * GitHub Plugin URI: https://github.com/soixantecircuits/super-easy-opt-in
 * WordPress-Plugin-Boilerplate: v2.6.1
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/*----------------------------------------------------------------------------*
 * Public-Facing Functionality
 *----------------------------------------------------------------------------*/

require_once( plugin_dir_path( __FILE__ ) . 'public/class-super-easy-opt-in.php' );

/*
 * Register hooks that are fired when the plugin is activated or deactivated.
 * When the plugin is deleted, the uninstall.php file is loaded.
 */

register_activation_hook( __FILE__, array( 'Super_Easy_Opt_In', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'Super_Easy_Opt_In', 'deactivate' ) );

add_action( 'plugins_loaded', array( 'Super_Easy_Opt_In', 'get_instance' ) );

/*----------------------------------------------------------------------------*
 * Dashboard and Administrative Functionality
 *----------------------------------------------------------------------------*/

/*
 * @TODO:
 *
 * If you want to include Ajax within the dashboard, change the following
 * conditional to:
 *
 * if ( is_admin() ) {
 *   ...
 * }
 *
 * The code below is intended to to give the lightest footprint possible.
 */
if ( is_admin() && ( ! defined( 'DOING_AJAX' ) || ! DOING_AJAX ) ) {

	require_once( plugin_dir_path( __FILE__ ) . 'admin/class-super-easy-opt-in-admin.php' );
	add_action( 'plugins_loaded', array( 'Super_Easy_Opt_In_Admin', 'get_instance' ) );

}
