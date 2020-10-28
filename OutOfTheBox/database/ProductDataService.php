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
        
        $stmt = $connection->prepare("SELECT ID, ProductName, Description, Price, imageURL FROM products WHERE 
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
                    $row["Price"], $row["imageURL"]);
                
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
    function updateOneProduct($id, $product){
        
        
        // $id is the number to update, Returns a true for success or false for failure.
        // $person is the item to change.
        $db = new ConnectDB();
        
        $connection = $db->getConnection();
        $productName = $product->getProductName();
        $description = $product->getDescription();
        $price = $product->getPrice();;
        $imageURL = $product->getImageURL();

    
        $stmt = $connection->prepare("UPDATE products SET ProductName = ?, Description = ?,
            Price = ?, imageURL = ? WHERE ID = ? LIMIT 1");
        
        if(!$stmt){
            echo "Something wrong in the binding process. sql error?";
            exit;
        }
        
        $stmt->bind_param("ssdsi", $productName, $description, $price, $imageURL, $id);
        
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
    
    function findProductByID($id){
        
        
        // $id is the number to search for, returns a single person object.
        $db = new ConnectDB();
        
        $connection = $db->getConnection();
        
        $stmt = $connection->prepare("SELECT ID, ProductName, Description, Price, imageURL FROM products WHERE ID = ? LIMIT 1");
        $stmt->bind_param("i", $id);
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
        $products = array();
        
        while($row = $result->fetch_assoc())
        {
            $products[$index] = array($row["ID"], $row["ProductName"], $row["Description"],
                $row["Price"], $row["imageURL"]);
            
            
            
            ++$index;
        }
        
        
        $p = new Products($products[0][0], $products[0][1], $products[0][2],
            $products[0][3], $products[0][4]);
        
        return $p;
        
        
    }
}

