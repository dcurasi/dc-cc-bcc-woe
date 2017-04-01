<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/dcurasi
 * @since             1.4.1
 * @package           Dc_Cc_Bcc_Woe
 *
 * @wordpress-plugin
 * Plugin Name:       CC & BCC for Woocommerce Order Emails
 * Plugin URI:        https://github.com/dcurasi/dc-cc-bcc-woe
 * Description:       It makes it possible to insert CC and BCC in Wooommerce emails.
 * Version:           1.4.1
 * Author:            Dario Curasì
 * Author URI:        https://github.com/dcurasi
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       dc-cc-bcc-woe
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-dc-cc-bcc-woe-activator.php
 */
function activate_dc_cc_bcc_woe() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-dc-cc-bcc-woe-activator.php';
	Dc_Cc_Bcc_Woe_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-dc-cc-bcc-woe-deactivator.php
 */
function deactivate_dc_cc_bcc_woe() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-dc-cc-bcc-woe-deactivator.php';
	Dc_Cc_Bcc_Woe_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_dc_cc_bcc_woe' );
register_deactivation_hook( __FILE__, 'deactivate_dc_cc_bcc_woe' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-dc-cc-bcc-woe.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_dc_cc_bcc_woe() {

	$plugin = new Dc_Cc_Bcc_Woe();
	$plugin->run();

}
run_dc_cc_bcc_woe();
