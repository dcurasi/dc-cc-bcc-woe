<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://github.com/dcurasi
 * @since      1.0.0
 *
 * @package    Dc_Cc_Bcc_Woe
 * @subpackage Dc_Cc_Bcc_Woe/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Dc_Cc_Bcc_Woe
 * @subpackage Dc_Cc_Bcc_Woe/public
 * @author     Dario Curasì <curasi.d87@gmail.com>
 */
class Dc_Cc_Bcc_Woe_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Dc_Cc_Bcc_Woe_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Dc_Cc_Bcc_Woe_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/dc-cc-bcc-woe-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Dc_Cc_Bcc_Woe_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Dc_Cc_Bcc_Woe_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/dc-cc-bcc-woe-public.js', array( 'jquery' ), $this->version, false );

	}

	function custom_headers_email_function( $headers, $object ) {
		if(get_option('dc_wech_new_order')) {
		    if ($object == 'new_order') {
		    	$headers .= 'CC: ' . str_replace(' ', '', get_option('dc_wech_email_list_cc')) . "\r\n";
		        $headers .= 'BCC: ' . str_replace(' ', '', get_option('dc_wech_email_list_bcc')) . "\r\n";
		    }
		}

		if(get_option('dc_wech_cancelled_order')) {
		    if ($object == 'cancelled_order') {
		    	$headers .= 'CC: ' . str_replace(' ', '', get_option('dc_wech_email_list_cc')) . "\r\n";
		        $headers .= 'BCC: ' . str_replace(' ', '', get_option('dc_wech_email_list_bcc')) . "\r\n";
		    }
		}

		if(get_option('dc_wech_failed_order')) {
		    if ($object == 'failed_order') {
		    	$headers .= 'CC: ' . str_replace(' ', '', get_option('dc_wech_email_list_cc')) . "\r\n";
		        $headers .= 'BCC: ' . str_replace(' ', '', get_option('dc_wech_email_list_bcc')) . "\r\n";
		    }
		}

		if(get_option('dc_wech_processing_order')) {
		    if ($object == 'customer_processing_order') {
		    	$headers .= 'CC: ' . str_replace(' ', '', get_option('dc_wech_email_list_cc')) . "\r\n";
		        $headers .= 'BCC: ' . str_replace(' ', '', get_option('dc_wech_email_list_bcc')) . "\r\n";
		    }
		}

		if(get_option('dc_wech_completed_order')) {
		    if ($object == 'customer_completed_order') {
		    	$headers .= 'CC: ' . str_replace(' ', '', get_option('dc_wech_email_list_cc')) . "\r\n";
		        $headers .= 'BCC: ' . str_replace(' ', '', get_option('dc_wech_email_list_bcc')) . "\r\n";
		    }
		}

		if(get_option('dc_wech_refunded_order')) {
		    if ($object == 'customer_refunded_order') {
		    	$headers .= 'CC: ' . str_replace(' ', '', get_option('dc_wech_email_list_cc')) . "\r\n";
		        $headers .= 'BCC: ' . str_replace(' ', '', get_option('dc_wech_email_list_bcc')) . "\r\n";
		    }
		}

		if(get_option('dc_wech_customer_new_account')) {
		    if ($object == 'customer_new_account') {
		    	$headers .= 'CC: ' . str_replace(' ', '', get_option('dc_wech_email_list_cc')) . "\r\n";
		        $headers .= 'BCC: ' . str_replace(' ', '', get_option('dc_wech_email_list_bcc')) . "\r\n";
		    }
		}

		if(get_option('dc_wech_customer_on_hold')) {
		    if ($object == 'customer_on_hold_order') {
		    	$headers .= 'CC: ' . str_replace(' ', '', get_option('dc_wech_email_list_cc')) . "\r\n";
		        $headers .= 'BCC: ' . str_replace(' ', '', get_option('dc_wech_email_list_bcc')) . "\r\n";
		    }
		}

		if(get_option('dc_wech_customer_invoice')) {
		    if ($object == 'customer_invoice') {
		    	$headers .= 'CC: ' . str_replace(' ', '', get_option('dc_wech_email_list_cc')) . "\r\n";
		        $headers .= 'BCC: ' . str_replace(' ', '', get_option('dc_wech_email_list_bcc')) . "\r\n";
		    }
		}

		if(get_option('dc_wech_activate_bookings')) {

			if(get_option('dc_wech_new_booking')) {
			    if ($object == 'new_booking') {
			    	$headers .= 'CC: ' . str_replace(' ', '', get_option('dc_wech_email_list_cc')) . "\r\n";
			        $headers .= 'BCC: ' . str_replace(' ', '', get_option('dc_wech_email_list_bcc')) . "\r\n";
			    }
			}

			if(get_option('dc_wech_booking_reminder')) {
			    if ($object == 'booking_reminder') {
			    	$headers .= 'CC: ' . str_replace(' ', '', get_option('dc_wech_email_list_cc')) . "\r\n";
			        $headers .= 'BCC: ' . str_replace(' ', '', get_option('dc_wech_email_list_bcc')) . "\r\n";
			    }
			}

			if(get_option('dc_wech_booking_confirmed')) {
			    if ($object == 'booking_confirmed') {
			    	$headers .= 'CC: ' . str_replace(' ', '', get_option('dc_wech_email_list_cc')) . "\r\n";
			        $headers .= 'BCC: ' . str_replace(' ', '', get_option('dc_wech_email_list_bcc')) . "\r\n";
			    }
			}

			if(get_option('dc_wech_booking_notification')) {
			    if ($object == 'booking_notification') {
			    	$headers .= 'CC: ' . str_replace(' ', '', get_option('dc_wech_email_list_cc')) . "\r\n";
			        $headers .= 'BCC: ' . str_replace(' ', '', get_option('dc_wech_email_list_bcc')) . "\r\n";
			    }
			}

			if(get_option('dc_wech_booking_cancelled')) {
			    if ($object == 'booking_cancelled') {
			    	$headers .= 'CC: ' . str_replace(' ', '', get_option('dc_wech_email_list_cc')) . "\r\n";
			        $headers .= 'BCC: ' . str_replace(' ', '', get_option('dc_wech_email_list_bcc')) . "\r\n";
			    }
			}

			if(get_option('dc_wech_admin_booking_cancelled')) {
			    if ($object == 'admin_booking_cancelled') {
			    	$headers .= 'CC: ' . str_replace(' ', '', get_option('dc_wech_email_list_cc')) . "\r\n";
			        $headers .= 'BCC: ' . str_replace(' ', '', get_option('dc_wech_email_list_bcc')) . "\r\n";
			    }
			}

		}

	    return $headers;
	}

}
