<?php

require_once 'header.php';
require_once 'autoLoader.php';

/*
 * Name: Raymond Popsie
 * File: RegistrationHandler.php
 * Date: 9/24/2020
 * Purpose: file will handle login requests
 *  */

$attemptedLoginName = $_POST['username'];
$attemtedPassword = $_POST['password'];

echo "You tried to login with " . $attemptedLoginName . "<br>" . $attemtedPassword . "<br>";

$service = new SecurityService($attemptedLoginName, $attemtedPassword);

$loggedIn = $service->authenticate();

if ($loggedIn)
{
    echo "Logged in success!";
    $_SESSION['principal'] = true;
    $service->selectData();
    include "loginSuccess.php";
    
} 
else
{
    echo "login fail";
    $_SESSION['principal'] = false;
    include "loginFailed.php";
}
?>