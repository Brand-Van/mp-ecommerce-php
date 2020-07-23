<?php

  // SDK de Mercado Pago
require __DIR__ .  '/extensions/vendor/autoload.php';


// Agrega credenciales
MercadoPago\SDK::setAccessToken('TEST-1312814065114980-072304-1ee125809f1817194f120ad82a80d679-614098036');

  $body = array(
    "json_data" => array(
      "site_id" => "MLA"
    )
  );

  $result = MercadoPago\SDK::post('/users/test_user', $body);

  var_dump($result);

  $body = array(
    "json_data" => array(
      "site_id" => "MLA"
    )
  );

  $result = MercadoPago\SDK::post('/users/test_user', $body);

  var_dump($result);






?>