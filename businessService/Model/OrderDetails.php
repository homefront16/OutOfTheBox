<?php


class OrderDetails
{
    private $id;
    private $quantity;
    private $currentPrice;
    private $currentDescription;
    private $orders_ID;
    private $Products_ID;

    function __construct(int $id, int $quantity, float $currentPrice, string $currentDescription, int $orders_ID, int $Products_ID)
    {
        $this->id = $id;
        $this->quantity = $quantity;
        $this->currentPrice = $currentPrice;
        $this->currentDescription = $currentDescription;
        $this->orders_ID = $orders_ID;
        $this->Products_ID = $Products_ID;
    }
    
    public function getId()
    {
        return $this->id;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function getCurrentPrice()
    {
        return $this->currentPrice;
    }

    public function getCurrentDescription()
    {
        return $this->currentDescription;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    public function setCurrentPrice($currentPrice)
    {
        $this->currentPrice = $currentPrice;
    }

    public function setCurrentDescription($currentDescription)
    {
        $this->currentDescription = $currentDescription;
    }
    public function getOrders_ID()
    {
        return $this->orders_ID;
    }
    
    public function getProducts_ID()
    {
        return $this->Products_ID;
    }
    
    public function setOrders_ID($orders_ID)
    {
        $this->orders_ID = $orders_ID;
    }
    
    public function setProducts_ID($Products_ID)
    {
        $this->Products_ID = $Products_ID;
    }
    


    
    
}

