<?php


use businessService\Model\Users;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../../autoLoader.php';
require_once '../../header.php';
require_once '../../businessService/Model/Users.php';

if(isset($_GET))
{
    $firstName = $_GET['FirstName'];
    $lastName = $_GET['LastName'];
    $username = $_GET['username'];
    $password = $_GET['password'];
    $role = $_GET['Role'];
    $email = $_GET['email'];
}

else{
    echo "Nothing submitted by the form. Please go back and try again<br>";
}

// send a new user object to the business service -> database service chain.

$bs = new UserBusinessService();
$user = new Users(0, $firstName, $lastName, $username, $password, $role, $email);

if($bs->makeNew($user)){
    echo "Item inserted<br>";
}
else{
    echo "Nothing inserted.";
}

echo "<a href='/'>Return to Home Page</a>";

?>