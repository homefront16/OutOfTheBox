<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once '../../header.php';
require_once '../../autoLoader.php';

/*
 * Name: Raymond Popsie
 * File: RegistrationHandler.php
 * Date: 9/24/2020
 * Purpose: file will handle login requests
 *  */

$attemptedLoginName = $_GET['username'];
$attemtedPassword = $_GET['password'];

echo "You tried to login with " . $attemptedLoginName . "<br>" . $attemtedPassword . "<br>";

$service = new SecurityService($attemptedLoginName, $attemtedPassword);

$loggedIn = $service->authenticate();

if ($loggedIn)
{
    echo "Logged in success!";
    $_SESSION['principal'] = true;
    $_SESSION['username'] = $attemptedLoginName;
    $_SESSION['loggedin'] = true;
    header("Location:http://localhost/OutOfTheBox/home.php");
  
    
} 
else
{
    echo "login fail";
    $_SESSION['principal'] = false;
    $_SESSION['loggedin'] = false;
    header("Location:http://localhost/OutOfTheBox/index.php");

}
?>