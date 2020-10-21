<?php

class Products
{
    private $id;
    private $productName;
    private $description;
    private $price;
    
    
    function __construct(int $id, string $productName, string $description, float $price)
    {
        $this->id = $id;
        $this->productName = $productName;
        $this->description = $description;
        $this->price = $price;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getProductName()
    {
        return $this->productName;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setProductName($productName)
    {
        $this->productName = $productName;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    
    
}

