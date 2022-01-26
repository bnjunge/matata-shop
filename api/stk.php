<?php
require_once __DIR__ .'/api.php';
$api = new API();

$orderData = file_get_contents("php://input");
$order = json_decode($orderData);
$orderid = uniqid();
$amount = ceil($order->total);

$payload = array (
    "BusinessShortCode" => $BusinessShortCode,
    "Password" => $Password,
    "Timestamp" => $Timestamp,
    "TransactionType" => "CustomerPayBillOnline",
    "Amount" => $amount,
    "PartyA" => $order->phone,
    "PartyB" =>  $BusinessShortCode,
    "PhoneNumber" => $order->phone,
    "CallBackURL" => LNMO_CALLBACK_URL . $orderid,
    "AccountReference" => $orderid,
    "TransactionDesc" => "Payment of X" 
);

$url = "https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest";

$response = $api->lipa_na_mpesa_online($url, json_encode($payload));

$data = [
    'orderid' => $orderid,
    'order' => $order,
    'stkreqres' => json_decode($response, true) 
];

$ord = fopen("orders/". $orderid.".json", "a");
fwrite($ord, json_encode($data));
fclose($ord);

echo json_encode($data);