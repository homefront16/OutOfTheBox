<?php


class Orders
{
    private $id;
    private $date;
    private $users_ID;
    private $Addresses_ID;
    private $totalPrice;



    function __construct(int $id, $date, int $users_ID, int $Addresses_ID, $totalPrice)
    {
        $this->id = $id;
        $this->date = $date;
        $this->users_ID = $users_ID;
        $this->Addresses_ID = $Addresses_ID;
        $this->totalPrice = $totalPrice;
    }
    
    /**
     * @return mixed
     */
    public function getTotalPrice()
    {
        return $this->totalPrice;
    }
    
    /**
     * @param mixed $totalPrice
     */
    public function setTotalPrice($totalPrice)
    {
        $this->totalPrice = $totalPrice;
    }
    public function getId()
    {
        return $this->id;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }
    
    public function getUsers_ID()
    {
        return $this->users_ID;
    }
    
    public function getAddresses_ID()
    {
        return $this->Addresses_ID;
    }
    
    public function setUsers_ID($users_ID)
    {
        $this->users_ID = $users_ID;
    }
    
    public function setAddresses_ID($Addresses_ID)
    {
        $this->Addresses_ID = $Addresses_ID;
    }
  
}

