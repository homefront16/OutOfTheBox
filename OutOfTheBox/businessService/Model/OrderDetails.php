<?php
namespace businessService;

class OrderDetails
{
    private $id;
    private $quantity;
    private $currentPrice;
    private $currentDescription;

    function __construct(int $id, int $quantity, float $currentPrice, string $currentDescription)
    {
        $this->id = $id;
        $this->quantity = $quantity;
        $this->currentPrice = $currentPrice;
        $this->currentDescription = $currentDescription;
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


    
    
}

