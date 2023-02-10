<?php

require 'cart.php';
require 'product.php';
session_start();

$products = [
    1 => ['id' => 1, 'name' => 'geladeira', 'price' => 1500, 'quantity' => 1],
    2 => ['id' => 2, 'name' => 'fogao', 'price' => 890, 'quantity' => 1],
    3 => ['id' => 1, 'name' => 'mouse', 'price' => 64, 'quantity' => 1],
    4 => ['id' => 1, 'name' => 'teclado', 'price' => 120, 'quantity' => 1],
    5 => ['id' => 1, 'name' => 'monitor', 'price' => 1270, 'quantity' => 1],
];

if(isset($_GET['id'])){
    $id = strip_tags($_GET['id']);
    $productInfo = $products[$id];
    $product = new product;
    $product->setId($productInfo['id']);
    $product->setName($productInfo['name']);
    $product->setPrice($productInfo['price']);
    $product->setQuantity($productInfo['quantity']);

    $cart = new cart;
    $cart->add($product);

    var_dump($_SESSION['cart'] ?? []);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amazon.com. Spend less. Smile more.</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="img/icon.png" type="image/png">
</head>
<body>
    <a href="/mycart.php">Go to cart</a>
    <ul>
        <li>Geladeira <a href=""?id=1>Add</a> R$ 1500,00</li>
        <li>Fogão <a href=""?id=2>Add</a> R$ 890,00</li>
        <li>Mouse <a href=""?id=3>Add</a> R$ 64,00</li>
        <li>Teclado <a href=""?id=4>Add</a> R$ 120,00</li>
        <li>Monitor <a href=""?id=5>Add</a> R$ 1270,00</li>
    </ul>
</body>
</html>