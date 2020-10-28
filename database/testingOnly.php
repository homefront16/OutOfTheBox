<?php



require_once 'UserDataService.php';
require_once 'ProductDataService.php';
require_once '../businessService/Model/Users.php'; 

$u = new UserDataService();
$b = new ProductDataService();

//echo "<pre>" . print_r($u->findByFirstName("Frank"), TRUE) . "</pre>";

//echo json_encode($u->findByFirstName(" "));

//echo "<pre>" . print_r($u->findByID("5"), TRUE) . "</pre>";
echo "<hr>";
//echo "<pre>" . print_r($b->findByProductName("a"), TRUE) . "</pre>";
echo "<pre>" . print_r($u->findByFirstNameWithAddress("Frank"), TRUE) . "</pre>";
//$newGuy = new Users(5, "Frank", "Lewis", "lewis22", "frew", 1, "frank@frank.com");

//$u->updateOne(5, $newGuy);
//echo "<pre>" . print_r($u->findByID("4"), TRUE) . "</pre>";
echo "<hr>";
?>