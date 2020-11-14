<?php

require_once '../../autoLoader.php';
session_start();


// get the product id will come from the button (on form) that was clicked
$id = $_GET['id'];

echo $id . "<br>";
echo $_SESSION['id'] . "<br>";

if(isset($_SESSION['cart'])){
    $cart = $_SESSION['cart'];
}
else{
    if(isset($_SESSION['userid'])){
        $cart = new Cart($_SESSION['userid']);
    }
    else{
        echo "Please login first<br>";
    }
    
}

$cart->addItem($id);
$cart->calcTotal();

$_SESSION['cart'] = $cart;

echo "<pre>";
print_r($cart);
echo "</pre>";

header("Location: ../views/showCart.php");



?>