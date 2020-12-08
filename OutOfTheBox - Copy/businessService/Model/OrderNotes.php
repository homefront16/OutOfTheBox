<?php


class OrderNotes
{
    private $id;
    private $notes;
    private $date;
    private $orders_ID;
    private $users_ID;

    function __construct($id, $notes, $date, int $orders_ID, int $users_ID)
    {
        $this->id = $id;
        $this->notes = $notes;
        $this->date = $date;
        $this->orders_ID = $orders_ID;
        $this->users_ID = $users_ID;
    }
 
    public function getId()
    {
        return $this->id;
    }

    public function getNotes()
    {
        return $this->notes;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setNotes($notes)
    {
        $this->notes = $notes;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }  
    
    public function getOrders_ID()
    {
        return $this->orders_ID;
    }
    
    public function getUsers_ID()
    {
        return $this->users_ID;
    }
    
    public function setOrders_ID($orders_ID)
    {
        $this->orders_ID = $orders_ID;
    }
    
    public function setUsers_ID($users_ID)
    {
        $this->users_ID = $users_ID;
    }


    
    
}

