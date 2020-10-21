<?php

require_once '../../autoLoader.php';

class ProductBusinessService
{
    function findByProductName($name){
        $service = new ProductDataService();
        return $service->findByProductName($name);
    }
}

?>

