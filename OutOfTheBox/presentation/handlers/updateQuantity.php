<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../../autoLoader.php';
require_once '../../header.php';

$quantity = $_GET['quantity'];
$productID = $_GET['id'];

if(isset($_SESSION['cart'])){
    $cart = $_SESSION['cart'];
}

$cart->updateQuantity($productID, $quantity);

$_SESSION['cart'] = $cart;

header('Location: ' . $_SERVER['HTTP_REFERER']);


?>