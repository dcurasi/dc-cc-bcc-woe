<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://github.com/dcurasi
 * @since      1.4.0
 *
 * @package    Dc_Cc_Bcc_Woe
 * @subpackage Dc_Cc_Bcc_Woe/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<h1><?php _e('CC & BCC for Woocommerce Order Emails', 'dc-cc-bcc-woe'); ?></h1>
<form method="post" action="options.php">
    <!--necessaria per il corretto aggiornamento dei dati-->
    <?php settings_fields('dc_wech_options_group'); ?>
    <?php settings_errors(); ?>
    <h2><?php _e( 'Configuration', 'dc-cc-bcc-woe' ); ?></h2>
    <table class="form-table">
           <tbody>
                <tr valign="top">
                    <th scope="row">
                        <label for="dc_wech_activate"><?php _e('Enable / Disable', 'dc-cc-bcc-woe'); ?></label>
                    </th>
                    <td>
                      <label for="dc_wech_activate">
                          <input type="checkbox" id="dc_wech_activate" value="1" <?php checked(get_option('dc_wech_activate'), 1); ?> name="dc_wech_activate"> <?php _e('Activate CC & BCC Options', 'dc-cc-bcc-woe'); ?>
                      </label>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">
                        <label for="dc_wech_email_list_cc"><?php _e('Email List CC', 'dc-cc-bcc-woe'); ?></label>
                    </th>
                    <td>
                        <input type="text" id="dc_wech_email_list_cc" value="<?php echo get_option('dc_wech_email_list_cc'); ?>" name="dc_wech_email_list_cc" class="regular-text">
                        <p class="description"><?php _e('Enter emails separated by commas', 'dc-cc-bcc-woe'); ?></p>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">
                        <label for="dc_wech_email_list_bcc"><?php _e('Email List BCC', 'dc-cc-bcc-woe'); ?></label>
                    </th>
                    <td>
                        <input type="text" id="dc_wech_email_list_bcc" value="<?php echo get_option('dc_wech_email_list_bcc'); ?>" name="dc_wech_email_list_bcc" class="regular-text">
                        <p class="description"><?php _e('Enter emails separated by commas', 'dc-cc-bcc-woe'); ?></p>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">
                        <label><?php _e('Email Type', 'dc-cc-bcc-woe'); ?></label>
                    </th>
                    <td>
                        <fieldset>
                          <label for="dc_wech_new_order">
                            <input type="checkbox" id="dc_wech_new_order" value="1" <?php checked(get_option('dc_wech_new_order'), 1); ?> name="dc_wech_new_order">
                            <?php _e('New Order', 'dc-cc-bcc-woe'); ?>
                          </label>
                          <br>
                          <label for="dc_wech_cancelled_order">
                            <input type="checkbox" id="dc_wech_cancelled_order" value="1" <?php checked(get_option('dc_wech_cancelled_order'), 1); ?> name="dc_wech_cancelled_order">
                            <?php _e('Cancelled Order', 'dc-cc-bcc-woe'); ?>
                          </label>
                          <br>
                          <label for="dc_wech_failed_order">
                            <input type="checkbox" id="dc_wech_failed_order" value="1" <?php checked(get_option('dc_wech_failed_order'), 1); ?> name="dc_wech_failed_order">
                            <?php _e('Failed Order', 'dc-cc-bcc-woe'); ?>
                          </label>
                          <br>
                          <label for="dc_wech_customer_on_hold">
                            <input type="checkbox" id="dc_wech_customer_on_hold" value="1" <?php checked(get_option('dc_wech_customer_on_hold'), 1); ?> name="dc_wech_customer_on_hold">
                            <?php _e('On hold Order', 'dc-cc-bcc-woe'); ?>
                          </label>
                          <br>
                          <label for="dc_wech_processing_order">
                            <input type="checkbox" id="dc_wech_processing_order" value="1" <?php checked(get_option('dc_wech_processing_order'), 1); ?> name="dc_wech_processing_order">
                            <?php _e('Processing Order', 'dc-cc-bcc-woe'); ?>
                          </label>
                          <br>
                          <label for="dc_wech_completed_order">
                            <input type="checkbox" id="dc_wech_completed_order" value="1" <?php checked(get_option('dc_wech_completed_order'), 1); ?> name="dc_wech_completed_order">
                            <?php _e('Completed Order', 'dc-cc-bcc-woe'); ?>
                          </label>
                          <br>
                          <label for="dc_wech_refunded_order">
                            <input type="checkbox" id="dc_wech_refunded_order" value="1" <?php checked(get_option('dc_wech_refunded_order'), 1); ?> name="dc_wech_refunded_order">
                            <?php _e('Refunded Order', 'dc-cc-bcc-woe'); ?>
                          </label>
                          <br>
                          <label for="dc_wech_customer_invoice">
                            <input type="checkbox" id="dc_wech_customer_invoice" value="1" <?php checked(get_option('dc_wech_customer_invoice'), 1); ?> name="dc_wech_customer_invoice">
                            <?php _e('Customer invoice', 'dc-cc-bcc-woe'); ?>
                          </label>
                          <br>
                          <label for="dc_wech_customer_new_account">
                            <input type="checkbox" id="dc_wech_customer_new_account" value="1" <?php checked(get_option('dc_wech_customer_new_account'), 1); ?> name="dc_wech_customer_new_account">
                            <?php _e('New Account', 'dc-cc-bcc-woe'); ?>
                          </label>
                        </fieldset>
                    </td>
                </tr>
            </tbody>
       </table>

      <h2><?php _e( 'Woocommerce Bookings Emails Options', 'dc-cc-bcc-woe' ); ?></h2>
      <p><?php _e( 'Use this section if you have installed Woocommerce Bookings.', 'dc-cc-bcc-woe' ); ?></p>
       <table class="form-table">
           <tbody>
                <tr valign="top">
                    <th scope="row">
                        <label for="dc_wech_activate_bookings"><?php _e('Enable / Disable', 'dc-cc-bcc-woe'); ?></label>
                    </th>
                    <td>
                      <label for="dc_wech_activate_bookings">
                          <input type="checkbox" id="dc_wech_activate_bookings" value="1" <?php checked(get_option('dc_wech_activate_bookings'), 1); ?> name="dc_wech_activate_bookings"> <?php _e('Activate WC Bookings Options', 'dc-cc-bcc-woe'); ?>
                      </label>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">
                        <label><?php _e('Email Type', 'dc-cc-bcc-woe'); ?></label>
                    </th>
                    <td>
                        <fieldset>
                          <label for="dc_wech_new_booking">
                            <input type="checkbox" id="dc_wech_new_booking" value="1" <?php checked(get_option('dc_wech_new_booking'), 1); ?> name="dc_wech_new_booking">
                            <?php _e('New Booking', 'dc-cc-bcc-woe'); ?>
                          </label>
                          <br>
                          <label for="dc_wech_booking_reminder">
                            <input type="checkbox" id="dc_wech_booking_reminder" value="1" <?php checked(get_option('dc_wech_booking_reminder'), 1); ?> name="dc_wech_booking_reminder">
                            <?php _e('Booking Reminder', 'dc-cc-bcc-woe'); ?>
                          </label>
                          <br>
                          <label for="dc_wech_booking_confirmed">
                            <input type="checkbox" id="dc_wech_booking_confirmed" value="1" <?php checked(get_option('dc_wech_booking_confirmed'), 1); ?> name="dc_wech_booking_confirmed">
                            <?php _e('Booking Confirmed', 'dc-cc-bcc-woe'); ?>
                          </label>
                          <br>
                          <label for="dc_wech_booking_notification">
                            <input type="checkbox" id="dc_wech_booking_notification" value="1" <?php checked(get_option('dc_wech_booking_notification'), 1); ?> name="dc_wech_booking_notification">
                            <?php _e('Booking Notification', 'dc-cc-bcc-woe'); ?>
                          </label>
                          <br>
                          <label for="dc_wech_booking_cancelled">
                            <input type="checkbox" id="dc_wech_booking_cancelled" value="1" <?php checked(get_option('dc_wech_booking_cancelled'), 1); ?> name="dc_wech_booking_cancelled">
                            <?php _e('Booking Cancelled', 'dc-cc-bcc-woe'); ?>
                          </label>
                          <br>
                          <label for="dc_wech_admin_booking_cancelled">
                            <input type="checkbox" id="dc_wech_admin_booking_cancelled" value="1" <?php checked(get_option('dc_wech_admin_booking_cancelled'), 1); ?> name="dc_wech_admin_booking_cancelled">
                            <?php _e('Admin Booking Cancelled', 'dc-cc-bcc-woe'); ?>
                          </label>
                        </fieldset>
                    </td>
                </tr>
                <tr valign="top">
                   <th scope="row"></th>
                   <td>
                       <?php submit_button(); ?>
                   </td>
                </tr>
            </tbody>
       </table>
</form>