<?php

$orderid = $_GET['oid'];
$data = file_get_contents("php://input");

$h = fopen("api/orders/" . $orderid . "-payment.json", "a");
fwrite($h, $data);
fclose($h);


http_response_code(200);