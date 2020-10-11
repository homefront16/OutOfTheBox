<?php
namespace businessService;

class Address
{

    private $id;
    private $addressType;
    private $isDefault;
    private $street;
    private $city;
    private $state;
    private $postalCode;
    
    function __contruct(int $id, int $addressType, int $isDefault, string $street, string $city, string $state, int $postalCode)
    {
        $this->id = $id;
        $this->addressType = $addressType;
        $this->isDefault = $isDefault;
        $this->street = $street;
        $this->city = $city;
        $this->state = $state;
        $this->postalCode = $postalCode;
    }
    
    public function getId()
    {
        return $this->id;
    }


    public function getAddressType()
    {
        return $this->addressType;
    }

    public function getIsDefault()
    {
        return $this->isDefault;
    }

    public function getStreet()
    {
        return $this->street;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function getState()
    {
        return $this->state;
    }

    public function getPostalCode()
    {
        return $this->postalCode;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setAddressType($addressType)
    {
        $this->addressType = $addressType;
    }

    public function setIsDefault($isDefault)
    {
        $this->isDefault = $isDefault;
    }

    public function setStreet($street)
    {
        $this->street = $street;
    }

    public function setCity($city)
    {
        $this->city = $city;
    }

    public function setState($state)
    {
        $this->state = $state;
    }

    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
    }


    
    
}

