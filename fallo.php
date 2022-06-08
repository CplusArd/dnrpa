<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    fallo
</body>
</html>

<?php

require __DIR__.'/vendor/autoload.php';
$access_token ='TEST-8168046229532498-060808-ee6f709f0735bbdbe0ee4c6c0a28e1ac-265435153';
MercadoPago\SDK::setAccessToken($access_token);
$preference = new MercadoPago\preference();
$preference -> back_urls = array(
    "success" => "http://http://localhost/dnrpa/index.php",
    "failure" => "http://http://localhost/dnrpa/fallo.php", 
    "pending" => "http://http://localhost/dnrpa/pendiente.php"
);

$producto = [];
$item = new MercadoPago\item();
$item -> title = "DNRPA";
$item -> quantity = 1;
$item -> unit_price = 1;
array_push($producto, $item);

$preference -> item = $producto;
$preference -> save();

?>