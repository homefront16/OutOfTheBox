<?php


//use businessService\Model\Users;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../../autoLoader.php';
require_once '../../header.php';
//require_once '../../businessService/Model/Users.php';

if(isset($_GET))
{
    $productName = $_GET['ProductName'];
    $description = $_GET['Description'];
    $price = $_GET['Price'];
    $imageURL = $_GET['imageURL'];
}

else{
    echo "Nothing submitted by the form. Please go back and try again<br>";
}

// send a new user object to the business service -> database service chain.

$bs = new ProductBusinessService();
$product = new Products(0, $productName, $description, $price, $imageURL);

if($bs->addNewProduct($product)){
    ?>
    <div class="alert alert-success" role="alert">
  	Product Succesfully Added!
	</div>
    <?php 
}
else{
    echo "Nothing inserted.";
}

echo "<a href='http://localhost/OutOfTheBox/presentation/handlers/ProductSearchHandler.php?name='>Return to Home Page</a>";

?>