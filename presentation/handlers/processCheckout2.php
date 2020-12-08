<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once '../../autoLoader.php';
require_once '../../header.php';

if(isset($_SESSION['cart']) && (isset($_SESSION['userid'])) ){
    $c = $_SESSION['cart'];
    $userID = $_SESSION['userid'];
}
else{
    echo "No products are in your cart or you have not logged in yet";
}

$c->calcTotal();
$total = $c->getTotalPrice();

$order = new Orders(0, date('Y-m-d H:i:s'), $userID, 2, $total);
$OrderBS = new OrdersBusinessService();
$OrderBS->checkOut($order, $c);


$connectDB = new ConnectDB();
$connect = $connectDB->getConnection();

$OrderBS = new OrdersBusinessService();
$newOrder = $OrderBS->createNewOrder($order, $connect); 






//$orderbs = new OrderBusinessService();
$productbs = new ProductBusinessService();
 // Need to create a get all products method for Product Business Service



echo "<h2>Transaction Complete</h2>";
echo "<h3>Your Receipt</h3>";

echo "<table class='table table-hover table-bordered table-striped'>";

echo "<thead>";
echo "<tr>";
echo "<th>Product ID</th>";
echo "<th>Name</th>";
echo "<th>Quantity</th>";
echo "<th>Price</th>";
echo "<th>Total</th>";

echo "</tr>";
echo "</thead>";
echo "<tbody>";

foreach($c->getItems() as $productID => $quantity){
    $product = $productbs->findProductByID($productID);
    echo "<tr>" ;
    
    echo "<td>" . $product->getId() . "</td>";
    echo "<td>" . $product->getProductName() . "</td>";
    echo "<td>" . $quantity . "</td>";
    echo "<td>" . sprintf('$%01.2f', $product->getPrice()) . "</td>";
    echo "<td>" . sprintf('$%01.2f', ($quantity * $product->getPrice())) . "</td>";
    echo "</tr>";

}

echo "</tbody>";
echo "</table>";
echo "<h4>Total Amount: " . sprintf('$%01.2f', $c->getTotalPrice()) . "</h4><br>";
// Clearing the cart
/* foreach($c->getItems() as $productID => $quantity){
   $c->updateQuantity($productID, 0);
} */

  ?>
  
    
    
    
    
    
    
    
    
    



