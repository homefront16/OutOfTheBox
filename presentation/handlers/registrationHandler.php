<?php

/* 
 * Name: Raymond Popsie
 * File: RegistrationHandler.php
 * Date: 9/24/2020
 * Purpose: file will handle new registration requests
 * Note: This is currently a placeholder file. Will be implementing
 * n-layered approach in Milestone 2.
 *  */


require_once 'header.php';
require_once 'autoLoader.php';


$firstName = $_POST['FirstName'];
$lastName  = $_POST['LastName'];
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['Role'];
$email = $_POST['email'];


$bs = new UserBusinessService();
$user = new Users(0, $firstName, $lastName, $username, $password, $role, $email);

$bs->makeNew($user);

?>

<div class="jumbotron">
  <h1 class="display-4">Welcome <?php echo $firstName?></h1>
  <p class="lead">Welcome to Out Of The Box. Get ready to look at unique products at crazy discounts!</p>
  <hr class="my-4">
  <p>We have new deals every day. Check out newest products and find your own unique piece!</p>
  <a class="btn btn-primary btn-lg" href="#" role="button">Check it out</a>
</div>