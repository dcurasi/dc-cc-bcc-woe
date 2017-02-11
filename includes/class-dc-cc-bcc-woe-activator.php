<?php

/**
 * Fired during plugin activation
 *
 * @link       https://github.com/dcurasi
 * @since      1.0.0
 *
 * @package    Dc_Cc_Bcc_Woe
 * @subpackage Dc_Cc_Bcc_Woe/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Dc_Cc_Bcc_Woe
 * @subpackage Dc_Cc_Bcc_Woe/includes
 * @author     Dario Curasì <curasi.d87@gmail.com>
 */
class Dc_Cc_Bcc_Woe_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.4.0
	 */
	public static function activate() {
		add_option('dc_wech_activate', 1);
	    add_option('dc_wech_email_list_cc', '');
	    add_option('dc_wech_email_list_bcc', '');
	    add_option('dc_wech_new_order', 1);
	    add_option('dc_wech_cancelled_order', 1);
	    add_option('dc_wech_failed_order', 1);
	    add_option('dc_wech_processing_order', 1);
	    add_option('dc_wech_completed_order', 1);
	    add_option('dc_wech_refunded_order', 1);
	    add_option('dc_wech_customer_new_account', 1);
	    add_option('dc_wech_customer_on_hold', 1);
	    add_option('dc_wech_customer_invoice', 1);
	    add_option('dc_wech_activate_bookings', 0);
	    add_option('dc_wech_new_booking', 0);
	    add_option('dc_wech_booking_reminder', 0);
	    add_option('dc_wech_booking_confirmed', 0);
	    add_option('dc_wech_booking_notification', 0);
	    add_option('dc_wech_booking_cancelled', 0);
	    add_option('dc_wech_admin_booking_cancelled', 0);
	}

}
