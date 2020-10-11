<?php
namespace businessService;

class OrderNotes
{
    private $id;
    private $notes;
    private $date;
 
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

    function __construct($id, $notes, $date)
    {
        $this->id = $id;
        $this->notes = $notes;
        $this->date = $date;
    }
    
    
}

