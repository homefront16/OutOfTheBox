<?php
/* 
 *  Author: Raymond Popsie
 *  Date: 11/13/2020
 *  Purpose: This file is the view for items that have been added to the cart. The view allows users 
 *  the ability to add items to cart, update quantity, and review their items before checking out. 
 *  
 *  
 *  */
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../../autoLoader.php';
require_once '../../header.php';

$productBS = new ProductBusinessService();
$userBS = new UserBusinessService();

if(isset($_SESSION['cart'])){
    $cart = $_SESSION['cart'];
}
else{
    echo "Nothing in the cart yet.<br>";
    exit();
}

if(isset($_SESSION['userid'])){
    $userid = $_SESSION['userid'];
}
else{
    echo "You are not logged in yet<br>";
    exit();
}

// Check to see if the cart belongs to the user whos logged in


if($cart->getUserid() != $userid){
    echo "It appears that this cart does not belong to you. Please login again<br>";
    exit();
}

//$formatter = new NumberFormatter('en_US', NumberFormatter::CURRENCY);


$user = $userBS->findByID($userid);
echo "<h2>View Cart</h2>";
echo "Cart for user: " . $user->getFirstName();

echo "<table class='table table-hover table-bordered table-striped'>";

echo "<thead>";
echo "<tr>";
echo "<th>Product ID</th>";
echo "<th>Name</th>";
echo "<th>Description</th>";
echo "<th>Photo</th>";
echo "<th>Quantity</th>";
echo "<th>Price</th>";
echo "<th>Subtotal</th>";
echo "<th>Total</th>";

echo "</tr>";
echo "</thead>";

//$formatter->formatCurrency(($quantity * $product->getPrice()), 'USD')

foreach($cart->getItems() as $productID => $quantity){
    $product = $productBS->findProductByID($productID);
    echo "<tr>" ;
    
    echo "<td>" . $product->getId() . "</td>";
    echo "<td>" . $product->getProductName() . "</td>";
    echo "<td>" . $product->getDescription() . "</td>";
    echo "<td><img height='120' src='../../images/" . $product->getImageURL(). "'> . </td>";
    echo "<td>";
    echo "<form action='http://localhost/OutOfTheBox/presentation/handlers/updateQuantity.php'>";
    echo "<input type='hidden' name='id' value=" . $product->getId() . ">";
    echo "<span class='input-group-text'>";
    echo "<input class='form-control' type='text' name='quantity' value= " . $quantity . ">";
    echo "<input class='btn btn-secondary' type='submit' name='submit' value='update'>";
    echo "</span>";
    echo "</form>";
    echo "</td>";
    echo "<td>" . $quantity . "</td>";
    echo "<td>" . sprintf('$%01.2f', $product->getPrice()) . "</td>";
    echo "<td>" . sprintf('$%01.2f', ($quantity * $product->getPrice())) . "</td>";
  //  echo "<td>" . $formatter->formatCurrency(($quantity * $product->getPrice()), 'USD') . "</td>";
    
    
    
    echo "</tr>";

}
echo "</tbody>";
echo "</table>";

include "_creditCardForm.php";

echo "<a class='btn btn-primary' href='http://localhost/OutOfTheBox/presentation/handlers/ProductSearchHandler.php?name='>Continue Shopping</a>";
echo "<a class='btn btn-primary' href='../handlers/processCheckout2.php'>Checkout</a>";





?>