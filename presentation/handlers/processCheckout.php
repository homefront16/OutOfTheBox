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

$connectDB = new ConnectDB();
$connect = $connectDB->getConnection();

$OrderBS = new OrdersBusinessService();
$newOrder = $OrderBS->createNewOrder($order, $connect);

echo "<pre>";
echo print_r($newOrder);
echo "</pre>";
?>