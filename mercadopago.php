<?php
// SDK de Mercado Pago
require __DIR__ .  '/extensions/vendor/autoload.php';


// Agrega credenciales
MercadoPago\SDK::setAccessToken('TEST-1312814065114980-072304-1ee125809f1817194f120ad82a80d679-614098036');


// Crea un objeto de preferencia
$preference = new MercadoPago\Preference();

// Crea un ítem en la preferencia
$item = new MercadoPago\Item();
$item->title = $_POST['title'];
$item->quantity = $_POST['unit'];
$item->unit_price = $_POST['price'];
$preference->items = array($item);
$preference->save();


?>