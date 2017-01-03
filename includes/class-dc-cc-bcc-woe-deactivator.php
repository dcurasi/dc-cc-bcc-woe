<?php

/**
 * Fired during plugin deactivation
 *
 * @link       https://github.com/dcurasi
 * @since      1.0.0
 *
 * @package    Dc_Cc_Bcc_Woe
 * @subpackage Dc_Cc_Bcc_Woe/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    Dc_Cc_Bcc_Woe
 * @subpackage Dc_Cc_Bcc_Woe/includes
 * @author     Dario Curasì <curasi.d87@gmail.com>
 */
class Dc_Cc_Bcc_Woe_Deactivator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.2.0
	 */
	public static function deactivate() {
		delete_option('dc_wech_activate');
	    delete_option('dc_wech_email_list_cc');
	    delete_option('dc_wech_email_list_bcc');
	    delete_option('dc_wech_new_order');
	    delete_option('dc_wech_cancelled_order');
	    delete_option('dc_wech_failed_order');
	    delete_option('dc_wech_processing_order');
	    delete_option('dc_wech_completed_order');
	    delete_option('dc_wech_refunded_order');
	    delete_option('dc_wech_customer_new_account');
	    delete_option('dc_wech_customer_on_hold');
	}

}
