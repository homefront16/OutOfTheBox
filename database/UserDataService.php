<?php



ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'ConnectDB.php';

class UserDataService{
    
    function showAllUsers(){
        // Returns an array of persons. Includes everyone in the database
        $db = new ConnectDB();
        
        $connection = $db->getConnection();
        
        $stmt = $connection->prepare("SELECT * FROM users");

        $stmt->execute();
        
        $result = $stmt->get_result();
        
        if(!$result){
            echo "assume the SQL statement has an error<br>";
            return null;
            exit;
        }
        
        if($result->num_rows == 0){
            return null;
        }
        else {

        }
        
        $index = 0;
        $users = array();
        
        while($row = $result->fetch_assoc())
        {
            $users[$index] = array($row["ID"], $row["FirstName"], $row["LastName"],
                $row["username"], $row["password"], $row["Role"], $row["email"]);
            
            ++$index;
            
        }
        return $users;
    }
    function findByFirstName($n){
        // Returns an array of persons
        $db = new ConnectDB();
        
        $connection = $db->getConnection();
  
        $stmt = $connection->prepare("SELECT ID, FirstName, LastName, username, password, Role, email FROM users WHERE FirstName LIKE ?");
        $like_n = "%" . $n . "%";
        $stmt->bind_param("s", $like_n);
        $stmt->execute();
        
        $result = $stmt->get_result();

        if(!$result){
            echo "assume the SQL statement has an error<br>";
            return null;
            exit;
        }
        
        if($result->num_rows == 0){
            return null;
        }
        else {
            echo "I found " . $result->num_rows . " results!" . "<br>";
        }
        
        $index = 0;
        $users = array();
        
        while($row = $result->fetch_assoc())
        {
            $users[$index] = array($row["ID"], $row["FirstName"], $row["LastName"], 
                $row["username"], $row["password"], $row["Role"], $row["email"]);

            ++$index;
            
        }
        return $users;
    }
    
    function findByLastName($n){
        // Returns an array of persons
        $db = new ConnectDB();
        
        $connection = $db->getConnection();
        
        $stmt = $connection->prepare("SELECT ID, FirstName, LastName, username, password, Role, email FROM users WHERE LastName LIKE ?");
        $like_n = "%" . $n . "%";
        $stmt->bind_param("s", $like_n);
        $stmt->execute();
        
        $result = $stmt->get_result();
        
        if(!$result){
            echo "assume the SQL statement has an error<br>";
            return null;
            exit;
        }
        
        if($result->num_rows == 0){
            return null;
        }
        else {
            echo "I found " . $result->num_rows . " results!" . "<br>";
        }
        
        $index = 0;
        $users = array();
        
        while($row = $result->fetch_assoc())
        {
            $users[$index] = array($row["ID"], $row["FirstName"], $row["LastName"],
                $row["username"], $row["password"], $row["Role"], $row["email"]);
            
            ++$index;
            
        }
        return $users;
    }
    function findByID($id){
        
        // $id is the number to search for, returns a single person object.
        $db = new ConnectDB();
        
        $connection = $db->getConnection();
        
        $stmt = $connection->prepare("SELECT ID, FirstName, LastName, username, password, Role, email FROM users WHERE ID = ? LIMIT 1");
        $stmt->bind_param("s", $id);
        $stmt->execute();
        
        $result = $stmt->get_result();
        
        if(!$result){
            echo "assume the SQL statement has an error<br>";
            return null;
            exit;
        }
        
        if($result->num_rows == 0){
            return null;
        }
        else {

        }
        
        $index = 0;
        $users = array();
        
        while($row = $result->fetch_assoc())
        {
            $users[$index] = array($row["ID"], $row["FirstName"], $row["LastName"],
                $row["username"], $row["password"], $row["Role"], $row["email"]);



            ++$index;
        }
  
        
        $p = new Users($users[0][0], $users[0][1], $users[0][2],
            $users[0][3], $users[0][4], $users[0][5], $users[0][6]); 
        
            return $p;
        
    }
    
    function deleteItemByID($id){

        // $id is the number to search for, Returns a true for success or false for failure
        $db = new ConnectDB();
        
        $connection = $db->getConnection();
        
        $stmt = $connection->prepare("DELETE FROM users WHERE ID = ? LIMIT 1");
        
        if(!$stmt){
            echo "Something went wrong in the binding process. sql error?";
            exit;
        }

        $stmt->bind_param("i", $id);

        // Execute Query
        $stmt->execute();
  
        // get results
        if($stmt->affected_rows > 0)
        {
            return true;
        }
        else 
        {
            return false;
        }
    }
    
    function updateOne($id, $person){
        
        // $id is the number to update, Returns a true for success or false for failure. 
        // $person is the item to change.
        $db = new ConnectDB();
      
        $connection = $db->getConnection();
        $firstName = $person->getFirstName();
        $lastName = $person->getLastName();
        $username = $person->getUsername();
        $password = $person->getPassword();
        $role = $person->getRole();
        $email = $person->getEmail();
        
        $stmt = $connection->prepare("UPDATE users SET FirstName = ?, LastName = ?, 
            username = ?, password = ?, Role = ?, email = ?  WHERE ID = ? LIMIT 1");
        
        if(!$stmt){
            echo "Something wrong in the binding process. sql error?";
            exit;
        }
        
        $stmt->bind_param("ssssisi", $firstName, $lastName, $username, $password, $role, $email, $id);
        
        // Execute Query
        $stmt->execute();
        
        // get results
        if($stmt->affected_rows > 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    function makeNew($person){
        
        // accepts a $person object. Inserts a new record into the USERS table.
        $db = new ConnectDB();
        
        
        $connection = $db->getConnection();
        $firstName = $person->getFirstName();
        $lastName = $person->getLastName();
        $username = $person->getUsername();
        $password = $person->getPassword();
        $role = $person->getRole();
        $email = $person->getEmail();
        
        
        $stmt = $connection->prepare("INSERT INTO users (FirstName, LastName, username, password, Role, email) VALUES(?,?,?,?,?,?)");
        
        if(!$stmt){
            echo "Something wrong in the binding process. sql error?";
            exit;
        }
        
        $stmt->bind_param("ssssis", $firstName, $lastName, $username, $password, $role, $email);
        
        // Execute Query
        $stmt->execute();
        
        // get results
        if($stmt->affected_rows > 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    function findByFirstNameWithAddress($n){
        // Returns an array of persons
        $db = new ConnectDB();
        
        $connection = $db->getConnection();
        
        $stmt = $connection->prepare("SELECT users.ID, IsDefault, FirstName, LastName, Street, City, State, PostalCode 
        FROM users 
        JOIN Addresses
        ON users.ID = Addresses.users_ID
        WHERE FirstName LIKE ?");
        
        if(!$stmt){
            echo "Something wrong in the binding process. sql error?";
            exit;
        }
        
        $like_n = "%" . $n . "%";
        $stmt->bind_param("s", $like_n);
        
        // execute statment
        $stmt->execute();
        
        $result = $stmt->get_result();
        
        if(!$result){
            echo "assume the SQL statement has an error<br>";
            return null;
            exit;
        }
        
        if($result->num_rows == 0){
            return null;
        }
        else {
            echo "I found " . $result->num_rows . " results!" . "<br>";
        }
        
        $index = 0;
        $users = array();
        
        while($row = $result->fetch_assoc())
        {
            $users[$index] = array($row["ID"], $row["IsDefault"], $row["FirstName"],
                $row["LastName"], $row["Street"], $row["City"], $row["State"], $row["PostalCode"]);
            
            ++$index;
            
        }
        return $users;
        
    }
    function findByFirstAndLastName($f, $l){
        // Returns an array of persons
        $db = new ConnectDB();
        
        $sql_query = "SELECT ID, FIRST_NAME, LAST_NAME FROM users WHERE FIRST_NAME LIKE '%$f%' OR LAST_NAME LIKE '%$l%' ";
        
        $connection = $db->getConnection();
        
        $result = $connection->query($sql_query);
        
        if(!$result){
            echo "assume the SQL statement has an error<br>";
            return null;
        }
        
        if($result->num_rows == 0){
            echo "No results found<br>";
            echo $sql_query;
            return null;
        }
        else {
            echo "I found " . $result->num_rows . " results!" . "<br>";
        }
        
        $index = 0;
        $users = array();
        
        while($row = $result->fetch_assoc())
        {
            $users[$index] = array($row["ID"], $row["FIRST_NAME"], $row["LAST_NAME"]);
            //array_push($person_array, $person);
            ++$index;
            // echo $sql_query;
            // echo $row["ID"] . " " . $row["FIRST_NAME"] . " " . $row["LAST_NAME"] . "<br>";
            
        }
        return $users;
    }
    function wildCardSearchBefore($f){
        // Returns an array of persons
        $db = new ConnectDB();
        
        $sql_query = "SELECT ID, FIRST_NAME, LAST_NAME FROM users WHERE FIRST_NAME LIKE '%$f'";
        
        $connection = $db->getConnection();
        
        $result = $connection->query($sql_query);
        
        if(!$result){
            echo "assume the SQL statement has an error<br>";
            return null;
        }
        
        if($result->num_rows == 0){
            echo "No results found<br>";
            echo $sql_query;
            return null;
        }
        else {
            echo "I found " . $result->num_rows . " results!" . "<br>";
        }
        
        $index = 0;
        $users = array();
        
        while($row = $result->fetch_assoc())
        {
            $users[$index] = array($row["ID"], $row["FIRST_NAME"], $row["LAST_NAME"]);
            //array_push($person_array, $person);
            ++$index;
            // echo $sql_query;
            // echo $row["ID"] . " " . $row["FIRST_NAME"] . " " . $row["LAST_NAME"] . "<br>";
            
        }
        return $users;
    }
    
    function wildCardSearchAfter($f){
        // Returns an array of persons
        $db = new ConnectDB();
        
        $sql_query = "SELECT ID, FIRST_NAME, LAST_NAME FROM users WHERE FIRST_NAME LIKE '$f%'";
        
        $connection = $db->getConnection();
        
        $result = $connection->query($sql_query);
        
        if(!$result){
            echo "assume the SQL statement has an error<br>";
            return null;
        }
        
        if($result->num_rows == 0){
            echo "No results found<br>";
            echo $sql_query;
            return null;
        }
        else {
            echo "I found " . $result->num_rows . " results!" . "<br>";
        }
        
        $index = 0;
        $users = array();
        
        while($row = $result->fetch_assoc())
        {
            $users[$index] = array($row["ID"], $row["FIRST_NAME"], $row["LAST_NAME"]);
            //array_push($person_array, $person);
            ++$index;
            // echo $sql_query;
            // echo $row["ID"] . " " . $row["FIRST_NAME"] . " " . $row["LAST_NAME"] . "<br>";
            
        }
        return $users;
    }
    function userAuthenticate($username, $password){
        // $id is the number to search for, Returns a true for success or false for failure
        $db = new ConnectDB();
        
        $connection = $db->getConnection();
        
        $stmt = $connection->prepare("SELECT username, password FROM users WHERE username = ? AND password = ?");
        
        if(!$stmt){
            echo "Something went wrong in the binding process. sql error?";
            exit;
        }
        
        $stmt->bind_param("ss", $username, $password);
        
        // Execute Query
        $stmt->execute();
        $result = $stmt->get_result();

        
 

        // get results
        if($result->num_rows > 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}

?>