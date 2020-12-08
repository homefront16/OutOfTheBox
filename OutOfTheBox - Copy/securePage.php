<?php
/*
 * Name: Raymond Popsie
 * File: securePage.php
 * Date: 9/23/2020
 * Purpose: file will handle session variable
 *  */
include_once 'header.php';

if (isset($_SESSION['principal']) == false || 
    $_SESSION['principal'] == null || 
    $_SESSION['principal'] == false)
{
    header("Location: login.html");
}

?>