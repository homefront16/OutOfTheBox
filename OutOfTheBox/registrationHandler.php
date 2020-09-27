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



$newUsername = $_POST['username'];
$newEmail = $_POST['email'];
$newPassword = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];

if(!$newPassword == "" || !$confirmPassword == "") {
    echo "Your new password is empty. Please try again";
}
if($newPassword == $confirmPassword){
    
}

?>