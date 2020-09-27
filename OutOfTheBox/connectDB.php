<?php
/*
 * Name: Raymond Popsie
 * File: connectDB.php
 * Date: 9/24/2020
 * Purpose: file will connect to DB
 * Note: This is currently a placeholder file. Will be implementing
 * n-layered approach in Milestone 2.
 *  */

$host = "localhost";
$username = "root";
$userPassword = "root";
$databaseInUse = "commerceSite";

$mysqli = new mysqli($host, $username, $userPassword, $databaseInUse);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "Was Successful!!!!" . "\n";

/* $mysqli = new mysqli("127.0.0.1", "user", "password", "database", 3306);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

echo $mysqli->host_info . "\n"; */

?>