<?php
/**
 * WooCommerce Klarna Gateway uninstall
 * 
 * Uninstall - removes all Klarna options from DB when user deletes the plugin via WordPress backend.
 * 
 * @since 0.3
 **/
 
if ( ! defined('WP_UNINSTALL_PLUGIN' ) ) {
    exit();
}

delete_option( 'woocommerce_klarna_settings' );