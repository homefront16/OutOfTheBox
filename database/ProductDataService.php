<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../../autoLoader.php';

class ProductDataService
{
    function findByProductName($n){

        // Search by product name. Returns an array of products
        $db = new ConnectDB();
        
        $connection = $db->getConnection();
        
        $stmt = $connection->prepare("SELECT ID, ProductName, Description, Price FROM products WHERE 
                ProductName LIKE ?");
        
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
            $index = 0;
            $users = array();
            
            while($row = $result->fetch_assoc())
            {
                $users[$index] = array($row["ID"], $row["ProductName"], $row["Description"],
                    $row["Price"]);
                
                ++$index;
                
            }
            return $users;
        /* $product_array = array();
        
        while($product = $result->fetch_assoc())
        {
            array_push($product_array, $product);
        }
        return $product_array;
        */
        } 
        
    }
}

