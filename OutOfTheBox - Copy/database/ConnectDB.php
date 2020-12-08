<?php
/*
 * Name: Raymond Popsie
 * File: ConnectDB.php
 * Date: 9/24/2020
 * Purpose: file will connect to DB
 * Note: This is currently a placeholder file. Will be implementing
 * n-layered approach in Milestone 2.
 *  */
class ConnectDB {
    private $dbServerName = "localhost";
    private $dbUserName = "root";
    private $dbPassword = "root";
    private $dbName = "outofthebox";
    
    function getConnection(){
        $conn = new mysqli($this->dbServerName, $this->dbUserName, $this->dbPassword, $this->dbName);
        
        if($conn->connect_error){
            echo "Connection failed." . $conn->connect_error . "<br>";
        }
        else {
            return $conn;
        }
    }
}

/* $mysqli = new mysqli("127.0.0.1", "user", "password", "database", 3306);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

echo $mysqli->host_info . "\n"; */

?>