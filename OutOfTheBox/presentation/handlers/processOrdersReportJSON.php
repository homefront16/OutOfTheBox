<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once '../../autoLoader.php';
require_once '../../header.php';

$date1 = $_GET['startdate'];
$date2 = $_GET['enddate'];

$orderBS = new OrdersBusinessService();

$orders = $orderBS->getOrdersBetweenDates($date1, $date2);

if($orders == null) {
    echo "Sorry. Nothing was found for that date range";
    exit;
}

echo json_encode($orders);
?>