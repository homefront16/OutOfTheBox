<?php


class OrderDataService
{
    function getOrdersBetweenDates($beginDate, $endDate){
        // Returns an array of persons
        $db = new ConnectDB();
        
        $connection = $db->getConnection();
        $stmt = $connection->prepare("
      SELECT orderdetails.Quantity,
        orders.ID,
        orders.date,
        users.FirstName,
        users.LastName,
        addresses.Street,
        addresses.City,
        addresses.State
        FROM orderdetails
        JOIN orders ON orders.ID = orderdetails.orders_ID
        JOIN users ON users.ID = orders.users_ID
        JOIN addresses ON addresses.ID = orders.users_ID
        WHERE orders.date BETWEEN ? AND ?
        ORDER BY Quantity DESC");
        
        if(!$stmt){
            echo "Something wrong in the binding process. sql error?";
            exit;
        }
        
        $stmt->bind_param("ss", $beginDate, $endDate);
        
        // execute statment
        $stmt->execute();
        
        $result = $stmt->get_result();
        
        if(!$result){
            echo "assume the SQL statement has an error<br>";
            return null;
            exit;
        }
        
        if($result->num_rows == 0){
            echo "No Results were found between those dates";
        }
        
        
        $index = 0;
        $orders = array();
        
        while($row = $result->fetch_assoc())
        {
            $orders[$index] = array($row["ID"], $row["date"], $row["FirstName"],
                $row["LastName"], $row["Street"], $row["City"], $row["State"]);
            
            ++$index;
            
        }
        return $orders;
    }
    
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
        
        $order_date = $order->getDate();
        $user_id = $order->getUsers_ID();
        $orderTotal = $order->getTotalPrice();
        
        /* bind parameters for markers*/
        $stmt->bind_param("sid", $order_date, $user_id, $orderTotal);

        
        $stmt->execute();
        
        if($stmt->affected_rows > 0){
            return $connection->insert_id;
        }
        else{
            return -1;
        }
        
    }
    
}

