<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://github.com/dcurasi
 * @since      1.0.0
 *
 * @package    Dc_Cc_Bcc_Woe
 * @subpackage Dc_Cc_Bcc_Woe/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<h1>CC & BCC for Woocommerce Order Emails</h1>
<form method="post" action="options.php">
    <!--necessaria per il corretto aggiornamento dei dati-->
    <?php settings_fields('dc_wech_options_group'); ?>
    <table class="form-table">
           <tbody>
                <tr valign="top">
                    <th scope="row">
                        <label for="dc_wech_activate">Enable / Disable</label>
                    </th>
                    <td>
                      <label for="dc_wech_activate">
                          <input type="checkbox" id="dc_wech_activate" value="1" <?php checked(get_option('dc_wech_activate'), 1); ?> name="dc_wech_activate"> Activate CC & BCC Options
                      </label>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">
                        <label for="dc_wech_email_list_cc">Email List CC</label>
                    </th>
                    <td>
                        <input type="text" id="dc_wech_email_list_cc" value="<?php echo get_option('dc_wech_email_list_cc'); ?>" name="dc_wech_email_list_cc" class="regular-text">
                        <p class="description">Enter emails separated by commas</p>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">
                        <label for="dc_wech_email_list_bcc">Email List BCC</label>
                    </th>
                    <td>
                        <input type="text" id="dc_wech_email_list_bcc" value="<?php echo get_option('dc_wech_email_list_bcc'); ?>" name="dc_wech_email_list_bcc" class="regular-text">
                        <p class="description">Enter emails separated by commas</p>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">
                        <label>Email Type</label>
                    </th>
                    <td>
                        <fieldset>
                          <label for="dc_wech_new_order">
                            <input type="checkbox" id="dc_wech_new_order" value="1" <?php checked(get_option('dc_wech_new_order'), 1); ?> name="dc_wech_new_order">
                            New Order
                          </label>
                          <br>
                          <label for="dc_wech_cancelled_order">
                            <input type="checkbox" id="dc_wech_cancelled_order" value="1" <?php checked(get_option('dc_wech_cancelled_order'), 1); ?> name="dc_wech_cancelled_order">
                            Cancelled Order
                          </label>
                          <br>
                          <label for="dc_wech_failed_order">
                            <input type="checkbox" id="dc_wech_failed_order" value="1" <?php checked(get_option('dc_wech_failed_order'), 1); ?> name="dc_wech_failed_order">
                            Failed Order
                          </label>
                          <br>
                          <label for="dc_wech_processing_order">
                            <input type="checkbox" id="dc_wech_processing_order" value="1" <?php checked(get_option('dc_wech_processing_order'), 1); ?> name="dc_wech_processing_order">
                            Processing Order
                          </label>
                          <br>
                          <label for="dc_wech_completed_order">
                            <input type="checkbox" id="dc_wech_completed_order" value="1" <?php checked(get_option('dc_wech_completed_order'), 1); ?> name="dc_wech_completed_order">
                            Completed Order
                          </label>
                          <br>
                          <label for="dc_wech_refunded_order">
                            <input type="checkbox" id="dc_wech_refunded_order" value="1" <?php checked(get_option('dc_wech_refunded_order'), 1); ?> name="dc_wech_refunded_order">
                            Refunded Order
                          </label>
                        </fieldset>
                    </td>
                </tr>
                <tr valign="top">
                   <th scope="row"></th>
                   <td>
                       <p>
                           <input type="submit" class="button-primary" id="submit" name="submit" value="Salva le modifiche">
                       </p>
                   </td>
                </tr>
            </tbody>
       </table>
</form>