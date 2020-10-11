<?php

require_once '../../autoLoader.php';

class ProductBusinessService
{
    function findByProductName($name){
        $service = new ProductBusinessService();
        return $service->findByProductName($name);
    }
}

?>

