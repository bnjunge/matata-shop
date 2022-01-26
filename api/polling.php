<?php
require_once __DIR__ .'/api.php';
$api = new API();

$checkoutid = $_GET['id'];

$payload = array(
    "BusinessShortCode" => $BusinessShortCode,
    "Password" => $Password,
    "Timestamp" => $Timestamp,
    'CheckoutRequestID' => $checkoutid
);

$url = "https://sandbox.safaricom.co.ke/mpesa/stkpushquery/v1/query";

$response = $api->lipa_na_mpesa_online($url, json_encode($payload));

echo $response;