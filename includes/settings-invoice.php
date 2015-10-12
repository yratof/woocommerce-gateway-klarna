<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Settings for Klarna Invoice
 */
return apply_filters( 'klarna_invoice_form_fields', array(
	'enabled' => array(
		'title' => __( 'Enable/Disable', 'klarna' ), 
		'type' => 'checkbox', 
		'label' => __( 'Enable Klarna Invoice', 'klarna' ), 
		'default' => 'no'
	), 
	'title' => array(
		'title' => __( 'Title', 'klarna' ), 
		'type' => 'text', 
		'description' => __( 'This controls the title which the user sees during checkout.', 'klarna' ), 
		'default' => __( 'Invoice', 'klarna' )
	),
	'description' => array(
		'title' => __( 'Description', 'klarna' ), 
		'type' => 'textarea', 
		'description' => __( 'This controls the description which the user sees during checkout.', 'klarna' ), 
		'default' => ''
	), 
	'push_completion' => array(
		'title' => __( 'On order completion', 'klarna' ), 
		'type' => 'checkbox', 
		'label' => __( 'Activate Klarna order automatically when WooCommerce order is marked complete.', 'klarna' ), 
		'default' => 'no'
	), 
	'push_cancellation' => array(
		'title' => __( 'On order cancellation', 'klarna' ), 
		'type' => 'checkbox', 
		'label' => __( 'Cancel Klarna order automatically when WooCommerce order is cancelled', 'klarna' ), 
		'default' => 'no'
	), 
	'push_update' => array(
		'title' => __( 'On order update', 'klarna' ), 
		'type' => 'checkbox', 
		'label' => __( 'Update Klarna order automatically when WooCoommerce line items are updated.', 'klarna' ), 
		'default' => 'no'
	), 
	
	'eid_se' => array(
		'title' => __( 'Eid - Sweden', 'klarna' ), 
		'type' => 'text', 
		'description' => __( 'Please enter your Klarna Eid for Sweden. Leave blank to disable.', 'klarna' ), 
		'default' => ''
	),
	'secret_se' => array(
		'title' => __( 'Shared Secret - Sweden', 'klarna' ), 
		'type' => 'password', 
		'description' => __( 'Please enter your Klarna Shared Secret for Sweden.', 'klarna' ), 
		'default' => ''
	),
	'eid_no' => array(
		'title' => __( 'Eid - Norway', 'klarna' ), 
		'type' => 'text', 
		'description' => __( 'Please enter your Klarna Eid for Norway. Leave blank to disable.', 'klarna' ), 
		'default' => ''
	),
	'secret_no' => array(
		'title' => __( 'Shared Secret - Norway', 'klarna' ), 
		'type' => 'password', 
		'description' => __( 'Please enter your Klarna Shared Secret for Norway.', 'klarna' ), 
		'default' => ''
	),
	'eid_fi' => array(
		'title' => __( 'Eid - Finland', 'klarna' ), 
		'type' => 'text', 
		'description' => __( 'Please enter your Klarna Eid for Finland. Leave blank to disable.', 'klarna' ), 
		'default' => ''
	),
	'secret_fi' => array(
		'title' => __( 'Shared Secret - Finland', 'klarna' ), 
		'type' => 'password', 
		'description' => __( 'Please enter your Klarna Shared Secret for Finland.', 'klarna' ), 
		'default' => ''
	),
	'eid_dk' => array(
		'title' => __( 'Eid - Denmark', 'klarna' ), 
		'type' => 'text', 
		'description' => __( 'Please enter your Klarna Eid for Denmark. Leave blank to disable.', 'klarna' ), 
		'default' => ''
	),
	'secret_dk' => array(
		'title' => __( 'Shared Secret - Denmark', 'klarna' ), 
		'type' => 'password', 
		'description' => __( 'Please enter your Klarna Shared Secret for Denmark.', 'klarna' ), 
		'default' => ''
	),
	'eid_de' => array(
		'title' => __( 'Eid - Germany', 'klarna' ), 
		'type' => 'text', 
		'description' => __( 'Please enter your Klarna Eid for Germany. Leave blank to disable.', 'klarna' ), 
		'default' => ''
	),
	'secret_de' => array(
		'title' => __( 'Shared Secret - Germany', 'klarna' ), 
		'type' => 'password', 
		'description' => __( 'Please enter your Klarna Shared Secret for Germany.', 'klarna' ), 
		'default' => ''
	),
	'eid_nl' => array(
		'title' => __( 'Eid - Netherlands', 'klarna' ), 
		'type' => 'text', 
		'description' => __( 'Please enter your Klarna Eid for Netherlands. Leave blank to disable.', 'klarna' ), 
		'default' => ''
	),
	'secret_nl' => array(
		'title' => __( 'Shared Secret - Netherlands', 'klarna' ), 
		'type' => 'password', 
		'description' => __( 'Please enter your Klarna Shared Secret for Netherlands.', 'klarna' ), 
		'default' => ''
	),
	'eid_at' => array(
		'title' => __( 'Eid - Austria', 'klarna' ), 
		'type' => 'text', 
		'description' => __( 'Please enter your Klarna Eid for Austria. Leave blank to disable.', 'klarna' ), 
		'default' => ''
	),
	'secret_at' => array(
		'title' => __( 'Shared Secret - Austria', 'klarna' ), 
		'type' => 'password', 
		'description' => __( 'Please enter your Klarna Shared Secret for Austria.', 'klarna' ), 
		'default' => ''
	),
	'lower_threshold' => array(
		'title' => __( 'Lower threshold', 'klarna' ), 
		'type' => 'text', 
		'description' => __( 'Disable Klarna Invoice if Cart Total is lower than the specified value. Leave blank to disable this feature.', 'klarna' ), 
		'default' => ''
	),
	'upper_threshold' => array(
		'title' => __( 'Upper threshold', 'klarna' ), 
		'type' => 'text', 
		'description' => __( 'Disable Klarna Invoice if Cart Total is higher than the specified value. Leave blank to disable this feature.', 'klarna' ), 
		'default' => ''
	),
	'invoice_fee_id' => array(
		'title' => __( 'Invoice Fee', 'klarna' ), 
		'type' => 'text', 
		'description' => __( 'Create a hidden (simple) product that acts as the invoice fee. Enter the ID number in this textfield. Leave blank to disable. ', 'klarna' ), 
		'default' => ''
	),
	'ship_to_billing_address' => array(
		'title' => __( 'Send billing address as shipping address', 'klarna' ), 
		'type' => 'checkbox', 
		'label' => __( 'Send the entered billing address in WooCommerce checkout as shipping address to Klarna.', 'klarna' ), 
		'default' => 'no'
	),
	'de_consent_terms' => array(
		'title' => __( 'Klarna consent terms (DE & AT only)', 'klarna' ), 
		'type' => 'checkbox', 
		'label' => __( 'Enable Klarna consent terms checkbox in checkout. This only apply to German and Austrian merchants.', 'klarna' ), 
		'default' => 'no'
	),
	'testmode' => array(
		'title' => __( 'Test Mode', 'klarna' ), 
		'type' => 'checkbox', 
		'label' => __( 'Enable Klarna Test Mode. This will only work if you have a Klarna test account. For test purchases with a live account, <a href="http://integration.klarna.com/en/testing/test-persons" target="_blank">follow these instructions</a>.', 'klarna' ), 
		'default' => 'no'
	)
) );