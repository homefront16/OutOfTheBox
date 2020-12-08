<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once '../../autoLoader.php';

class OrdersBusinessService
{
    function checkOut($order, $cart){
       
       
        // Ensure that the transaction is atomic
        
        // Make a connection
        $dbService = new OrderDataService();
        $connect = new ConnectDB();
        $connection = $connect->getConnection();
        $productBS = new ProductBusinessService();
        
        // Stop the auto insert
        $connection->autocommit(FALSE);
        
        // Start a transaction
        $connection->begin_transaction();
        
        // Create a new line in the orders table. This will rely on the createNewOrder function in OrderDataService.
        
        $newOrderID = $dbService->createNewOrder($order, $connection);
            
        // Create multiple lines in the order details table. Relies on the addDetailsLine in OrderDataService. 
        foreach($cart->getItems() as $item => $quantity){
            $product = $productBS->findProductByID($item);
            $order_id = $newOrderID;
            $orderDetails = new OrderDetails(0, $quantity, $product->getPrice(), $product->getDescription(), $order_id, $product->getId());
            $detailsOK = $dbService->addDetailsLine($orderDetails, $connection);
           // new OrderDetails($id, $quantity, $currentPrice, $currentDescription, $orders_ID, $Products_ID)
        }
        
        
      
        // Complete the transaction
        if($newOrderID != -1 && $detailsOK != -1){
      
            $connection->commit();
            echo "Transaction Succesful";
        }
        
        else{
            $connection->rollback();
            echo "Transaction failed";
        } 
        
        $connection->close();

    }
    
    function addOrderDetails($order_id, $orderDetails, $connection){
        $dbService = new OrderDataService();
        return $dbService->addDetailsLine($orderDetails, $connection);
    }
        
    
    function createNewOrder($order, $conn){
        // Accepts a new $oder object. Ignores the id number. The db will auto-assign the new id number
        // Returns the id number of the last inserted record.
        
        $dbService = new OrderDataService();
        return $dbService->createNewOrder($order, $conn);
    }
    
    function getAllOrders(){
        // $products = Array();
        
        $dbService = new OrderDataService();
        $orders = $dbService->getAllOrders();
         return $orders;
    }
    
    function deleteItem($id){
        // $id is the number to delete. 
        $dbService = new OrderDataService();
       
        return $dbService->deleteItem($id);
    }
    
    function findById($id){
        // $id is the number to serach for. 
        $dbService = new OrderDataService();
        $order = $dbService->findById($id);
        
        return $order;
    }
}

?>
