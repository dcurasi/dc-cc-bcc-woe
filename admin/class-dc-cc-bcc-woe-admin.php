<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://github.com/dcurasi
 * @since      1.0.0
 *
 * @package    Dc_Cc_Bcc_Woe
 * @subpackage Dc_Cc_Bcc_Woe/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Dc_Cc_Bcc_Woe
 * @subpackage Dc_Cc_Bcc_Woe/admin
 * @author     Dario Curasì <curasi.d87@gmail.com>
 */
class Dc_Cc_Bcc_Woe_Admin {

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
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
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

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/dc-cc-bcc-woe-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
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

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/dc-cc-bcc-woe-admin.js', array( 'jquery' ), $this->version, false );

	}

	//inizializzazione menu di amministrazione
	function add_menu_page()
	{
	    add_submenu_page('woocommerce','CC & BCC', 'CC & BCC', 'manage_options', 'dc-wech-menu-page', array( $this,'create_admin_interface' ));
	}

	/**
	 * Callback function for the admin settings page.
	 *
	 * @since    1.0.0
	 */
	public function create_admin_interface(){

		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/partials/dc-cc-bcc-woe-admin-display.php';

	}

	/**
	 * Creates our settings sections with fields etc.
	 *
	 * @since    1.4.0
	 */
	public function settings_api_init(){
		register_setting('dc_wech_options_group', 'dc_wech_activate');
	    register_setting('dc_wech_options_group', 'dc_wech_email_list_cc');
	    register_setting('dc_wech_options_group', 'dc_wech_email_list_bcc');
	    register_setting('dc_wech_options_group', 'dc_wech_new_order');
	    register_setting('dc_wech_options_group', 'dc_wech_cancelled_order');
	    register_setting('dc_wech_options_group', 'dc_wech_failed_order');
	    register_setting('dc_wech_options_group', 'dc_wech_processing_order');
	    register_setting('dc_wech_options_group', 'dc_wech_completed_order');
	    register_setting('dc_wech_options_group', 'dc_wech_refunded_order');
	    register_setting('dc_wech_options_group', 'dc_wech_customer_new_account');
	    register_setting('dc_wech_options_group', 'dc_wech_customer_on_hold');
	    register_setting('dc_wech_options_group', 'dc_wech_customer_invoice');
	    //WooCommerce Bookings Options
	    register_setting('dc_wech_options_group', 'dc_wech_activate_bookings');
	    register_setting('dc_wech_options_group', 'dc_wech_new_booking');
	    register_setting('dc_wech_options_group', 'dc_wech_booking_reminder');
	    register_setting('dc_wech_options_group', 'dc_wech_booking_confirmed');
	    register_setting('dc_wech_options_group', 'dc_wech_booking_notification');
	    register_setting('dc_wech_options_group', 'dc_wech_booking_cancelled');
	    register_setting('dc_wech_options_group', 'dc_wech_admin_booking_cancelled');
	}


	/**
	 * Error notice when Woocommerce is not installed.
	 *
	 * @since    1.4.0
	 */
	public function error_notice() {
		echo '<div class="notice notice-error is-dismissible">
        		<p>'.__('CC & BCC for Woocommerce Order Emails is active but does not work. You need to install WooCommerce because the plugin is working properly.', 'dc-cc-bcc-woe').'</p>
    		  </div>';
	}

	/**
	 * Error notice when Woocommerce Bookings is not installed.
	 *
	 * @since    1.4.0
	 */
	public function error_notice_booking() {
		echo '<div class="notice notice-error is-dismissible">
        		<p>'.__('The options for Woocommerce Bookings are enabled in CC & BCC for Woocommerce Order Emails but does not work. You need to install Woocommerce Bookings or disable these options because the plugin is working properly.', 'dc-cc-bcc-woe').'</p>
    		  </div>';
	}

}
