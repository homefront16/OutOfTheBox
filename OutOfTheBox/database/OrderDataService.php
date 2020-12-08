<?php


class OrderDataService
{
    function addDetailsLine($orderDetails, $connection){
        // Create a new line in the order details table. 
        // Return the id number of the last item inserted.
        $stmt = $connection->prepare("INSERT INTO ORDERDETAILS (Quantity, CurrentPrice, CurrentDescription, orders_ID, Products_ID) VALUES (?, ?, ?, ?, ?)");

        $quantity = $orderDetails->getQuantity();
        $currentPrice = $orderDetails->getCurrentPrice();
        $currentDescription = $orderDetails->getCurrentDescription();
        $orders_id = $orderDetails->getOrders_ID();
        $productsID = $orderDetails->getProducts_ID();
        
        $stmt->bind_param("idsii", $quantity, $currentPrice, $currentDescription, $orders_id, $productsID);
        
        if(!$stmt){
            echo "Something wrong in the binding process. SQL statement error? ";
            return -1;
        }

        $stmt->execute();
        
        
        if($stmt->affected_rows > 0){
            //Success
            return $connection->insert_id;
        }
        else{
            //echo("Error description: " . $connection -> error);
            return -1;
        }
    }
    function createNewOrder($order, $connection){
 /*        $db = new ConnectDB();
        $connection = $db->getConnection(); */
        
        $stmt = $connection->prepare("INSERT INTO ORDERS (DATE, users_ID, totalPrice) VALUES(?,?,?)");
        
        if(!$stmt){
            echo "Something wrong in the binding process. sql error?";
            exit;
        }
        
        
       // $order_id = $order->getId();
        $order_date = $order->getDate();
        $user_id = $order->getUsers_ID();
        $orderTotal = $order->getTotalPrice();
        
        /* bind parameters for markers*/
        $stmt->bind_param("sid", $order_date, $user_id, $orderTotal);

        
        $stmt->execute();
        
        if($stmt->affected_rows > 0){
            //$connection->close();
            return $connection->insert_id;
        }
        else{
           // $connection->close();
            echo "nothing inserted into the database during newOrder.";
            return false;
        }
        
    }
    
}

