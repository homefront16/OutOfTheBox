<?php

/* 
 * Name: Raymond Popsie
 * File: RegistrationHandler.php
 * Date: 9/24/2020
 * Purpose: file will handle new registration requests
 * Note: This is currently a placeholder file. Will be implementing
 * n-layered approach in Milestone 2.
 *  */

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../../header.php';
require_once '../../autoLoader.php';


$firstName = $_GET['FirstName'];
$lastName  = $_GET['LastName'];
$username = $_GET['username'];
$password = $_GET['password'];
$role = $_GET['Role'];
$email = $_GET['email'];


$bs = new UserBusinessService();
$user = new Users(0, $firstName, $lastName, $username, $password, $role, $email);

$bs->makeNew($user);

?>
s
<div class="jumbotron">
  <h1 class="display-4">Welcome <?php echo $firstName?></h1>
  <p class="lead">Welcome to Out Of The Box. Get ready to look at unique products at crazy discounts!</p>
  <hr class="my-4">
  <p>We have new deals every day. Check out newest products and find your own unique piece!</p>
  <a class="btn btn-primary btn-lg" href="http://localhost/OutOfTheBox/presentation/handlers/ProductSearchHandler.php?name=" role="button">Check it out</a>
</div>