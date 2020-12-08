<?php

require_once '../autoLoader.php';

class CreditCardService
{
    private $owner = "";
    private $cvv = "";
    private $cardNumber = "";
    private $month = "";
    private $year = "";
    
    
    function __construct($owner, $cvv, $cardNumber, $month, $year){
        $this->owner = $owner;
        $this->cvv = $cvv;
        $this->cardNumber = $cardNumber;
        $this->month = $month;
        $this->year = $year;
    }
    
    public function authenticate(){
        if($this->owner != ""){
            return true;
        }
        else{
            return false;
        }
    }
    
    
    /**
     * @return string
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * @return string
     */
    public function getCvv()
    {
        return $this->cvv;
    }

    /**
     * @return string
     */
    public function getCardNumber()
    {
        return $this->cardNumber;
    }

    /**
     * @return string
     */
    public function getMonth()
    {
        return $this->month;
    }

    /**
     * @return string
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @param string $owner
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;
    }

    /**
     * @param string $cvv
     */
    public function setCvv($cvv)
    {
        $this->cvv = $cvv;
    }

    /**
     * @param string $cardNumber
     */
    public function setCardNumber($cardNumber)
    {
        $this->cardNumber = $cardNumber;
    }

    /**
     * @param string $month
     */
    public function setMonth($month)
    {
        $this->month = $month;
    }

    /**
     * @param string $year
     */
    public function setYear($year)
    {
        $this->year = $year;
    }

    
}

