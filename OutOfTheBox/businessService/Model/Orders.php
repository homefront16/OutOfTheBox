<?php
namespace businessService;

class Orders
{
    private $id;
    private $date;
    
    function __construct(int $id, $date)
    {
        $this->id = $id;
        $this->date = $date;
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
  
}

