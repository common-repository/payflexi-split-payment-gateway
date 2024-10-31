<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$form_fields = array(
    'enabled' => array(
        'title'       => 'Enable/Disable',
        'label'       => 'Enable Pay in Installment via PayFlexi',
        'type'        => 'checkbox',
        'description' => 'Enable PayFlexi as a payment option on the checkout page.',
        'default'     => 'no',
        'desc_tip'    => true
    ),
    'title' => array(
        'title'         => 'Title',
        'type'          => 'text',
        'description'   => 'This controls the payment method title which the user sees during checkout.',
        'default'       => 'Pay in Installment (via PayFlexi)',
        'desc_tip'      => true,
    ),
    'description'     => array(
        'title'       => 'Description',
        'type'        => 'text',
        'default'     => 'With PayFlexi, you can pay in flexible installments or let others pay for you.',
        'description' => 'This is the description that the customer will see on checkout page',
        'desc_tip'    => true,
    ),
    'env' => array(
        'title'   => 'Environment',
        'type'    => 'select',
        'label'   => 'Choose whether to activate the plugin in live or test mode',
        'options' => array(
            'live'    => 'Live',
            'test' => 'Test'
        ),
        'default' => 'live',
    ),
    'gateway' => array(
        'title'   => 'Payment Gateway',
        'type'    => 'select',
        'description'   => 'Select a payment gateway that correspond to what you activated on your PayFlexi account',
        'options' => array(
            'stripe'    => 'Stripe',
            'paystack' => 'Paystack',
            'payflexi' => 'PayFlexi (For Nigeria Merchants Only)'
        ),
        'default' => 'stripe',
    ),
	'test_api_credentials' => array(
		'title'       => 'Enter your test credentials here and connect your Payflexi account',
		'type'        => 'title',
		'class'       => 'test',
		'description' => 'You can connect an existing account or create a new one',
	),
    'test_api_secret_key' => array(
        'title'       => 'Test Secret Key',
        'type'        => 'text'
    ),
    'test_api_public_key' => array(
        'title'       => 'Test Public Key',
        'type'        => 'text'
    ),
    'live_api_credentials' => array(
		'title'       => 'Enter your live credentials here and connect your Payflexi account',
		'type'        => 'title',
		'class'       => 'live',
		'description' => 'You can connect an existing account or create a new one',
	),
    'live_api_secret_key' => array(
        'title'       => 'Live Secret Key',
        'type'        => 'text'
    ),
    'live_api_public_key' => array(
        'title'       => 'Live Public Key',
        'type'        => 'text'
    ),
    'popup_information_options'   => array(
        'title' => 'Popup Information options',
        'type'  => 'title',
    ),
    'popup_information_enabled' => array(
        'title' => __('Payflexi Popup information enabled', 'payflexi-flexible-checkout-for-woocommerce'),
        'label' => __('Enable Payflexi popup information for your product page.', 'payflexi-flexible-checkout-for-woocommerce'),
        'type' => 'checkbox',
        'default' => 'no'
    ),
    'popup_trigger_text' => array(
        'title' => __( 'Popup trigger text', 'payflexi-flexible-checkout-for-woocommerce' ),
        'type' => 'text',
        'default'=>'Pay in Installment - Learn more'
    )
 
);

return $form_fields;
