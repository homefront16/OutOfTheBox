<?php

require_once '../../autoLoader.php';

class ProductBusinessService
{
    function findByProductName($name){
        $service = new ProductDataService();
        return $service->findByProductName($name);
    }
    
    function findProductByID($id){
        $service = new ProductDataService();
        return $service->findProductByID($id);
    }
    function updateOneProduct($id, $product){
        $service = new ProductDataService();
        return $service->updateOneProduct($id, $product);
    }
}

?>

