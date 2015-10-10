<?php
/*
 * Plugin Name: Voo_Debug
 * Version: 1.0
 * Plugin URI: http://www.hughlashbrooke.com/
 * Description: This is your starter template for your next WordPress plugin.
 * Author: Hugh Lashbrooke
 * Author URI: http://www.hughlashbrooke.com/
 * Requires at least: 4.0
 * Tested up to: 4.0
 *
 * Text Domain: voo-debug
 * Domain Path: /lang/
 *
 * @package WordPress
 * @author Hugh Lashbrooke
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// Load plugin class files
require_once( 'includes/class-voo-debug.php' );
require_once( 'includes/class-voo-debug-settings.php' );

// Load plugin libraries
require_once( 'includes/lib/class-voo-debug-admin-api.php' );
require_once( 'includes/lib/class-voo-debug-post-type.php' );
require_once( 'includes/lib/class-voo-debug-taxonomy.php' );

/**
 * Returns the main instance of Voo_Debug to prevent the need to use globals.
 *
 * @since  1.0.0
 * @return object Voo_Debug
 */
function Voo_Debug () {
	$instance = Voo_Debug::instance( __FILE__, '1.0.0' );

	if ( is_null( $instance->settings ) ) {
		$instance->settings = Voo_Debug_Settings::instance( $instance );
	}

	return $instance;
}

Voo_Debug();
