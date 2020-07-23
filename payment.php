<?php

require ('mercadopago.php');

$mp = new MP ("ENV_ACCESS_TOKEN");

$payment = $mp->get(
    "/v1/payments/". $paymentId
);

?>