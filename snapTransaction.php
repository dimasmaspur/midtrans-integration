<?php

require 'vendor/autoload.php';

// Set your Merchant Server Key
\Midtrans\Config::$serverKey = 'SB-Mid-server-AGY1K2Vixn9jMLcche-bypvc';
// Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
\Midtrans\Config::$isProduction = false;
// Set sanitization on (default)
\Midtrans\Config::$isSanitized = true;
// Set 3DS transaction for credit card to true
\Midtrans\Config::$is3ds = true;

$params = array(
    'transaction_details' => array(
        'order_id' => rand(),
        'gross_amount' => 10000,
    ),
    'customer_details' => array(
        'first_name' => 'widada',
        'last_name' => 'keren',
        'email' => 'budi.pra@example.com',
        'phone' => '08111222333',
    ),
);

// $snapToken = \Midtrans\Snap::getSnapToken($params);

$snapurlredirect = \Midtrans\Snap::createTransaction($params)->redirect_url;

echo $snapurlredirect;