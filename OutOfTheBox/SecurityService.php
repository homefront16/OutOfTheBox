<?php
/*
 * Name: Raymond Popsie
 * File: RegistrationHandler.php
 * Date: 9/23/2020
 * Purpose: Class will be used to implement security methods throughout the site
 * Note: This is currently a placeholder file. Will be implementing
 * DBO approach in Milestone 2.
 *  */

require_once 'header.php';
require_once 'connectDB.php';

class SecurityService
{

    
    private $username = "";
    private $password = "";

    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

/*   Placeholder for authentication. Only 1 username/pass accepted for now. 
     Will be using SQL querys to confirm registered user names and passwords.  */
    public function authenticate()
    {
        if ($this->password == "" || $this->username == "") {
            return false;
        }
        if ($this->password == "secretpw" && $this->username == "ray") {
            return true;
        } else {
            return false;
        }
    }
 
/*   This method connects to the data base and contains SQL query
     to obtain all fields from the users table. A test method for connecting
     to DB and pulling data from a table. Will be implementing the DBO approach
     on Milestone 2 to conduct the SQL queries and connection to DB. */
    public function selectData(){
        $host = "localhost";
        $username = "root";
        $userPassword = "root";
        $databaseInUse = "commerceSite";
        
        $mysqli = new mysqli($host, $username, $userPassword, $databaseInUse);
        if ($mysqli->connect_errno) {
            echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }
        echo $mysqli->host_info . "Was Successful!!!!" . "\n";
        
        $sql = "SELECT ID, username, firstName, password, email FROM users";
        $result = $mysqli->query($sql);
        
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "id: " . $row["ID"]. " - username: " . $row["username"]. 
                " " . $row["firstName"]. $row["password"] . $row["email"] . "<br>";
            }
        } else {
            echo "0 results";
        }
        $mysqli->close();
    }
}

?>