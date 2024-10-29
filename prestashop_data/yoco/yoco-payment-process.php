<?php
require_once(dirname(__FILE__).'/../config/config.inc.php');
require_once(dirname(__FILE__).'/../init.php');

header('Content-Type: application/json');

$context = Context::getContext();
$message = 'Payment processing successful';
$status = 'success';

if (Tools::isSubmit('ajax') && Tools::getValue('action') == 'processYocoPayment') {
    $token = Tools::getValue('token');

    // Load the cart
    $cart = $context->cart;

    // Calculate the total amount in cents
    $amount = $cart->getOrderTotal(true, Cart::BOTH) * 100;

    // Set your Yoco secret key
    $secretKey = 'sk_test_960bfde0VBrLlpK098e4ffeb53e1';


    // Prepare the API request
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://online.yoco.com/v1/charges/');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query([
        'token' => $token,
        'amountInCents' => $amount,
        'currency' => 'ZAR', // Change this if you're using a different currency
    ]));
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'X-Auth-Secret-Key: ' . $secretKey,
    ]);

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    // result
    $result = json_decode($response, true);


    if ($httpCode == 201 && isset($result['status']) && $result['status'] == 'successful') {
        echo 'Payment successful: ' . json_encode($result);
    } else {
        // Payment failed
        echo(json_encode([
            'success' => false,
            'error' => isset($result['displayMessage']) ? $result['displayMessage'] : 'Payment processing failed',
        ]));
    }

}
