<?php

require_once '../../autoLoader.php';

$owner = $_GET['owner'];
$cvv = $_GET['cvv'];
$cardNumber = $_GET['cardNumber'];
$month = $_GET['month'];
$year = $_GET['year'];

$ccservice = new CreditCardService($owner, $cvv, $cardNumber, $month, $year);
if($ccservice->authenticate()){
    echo "<h5>Authenticated</h5>";
}
else{
    echo "<h5>Credit Card Failed</h5>";
    exit;
}



?>