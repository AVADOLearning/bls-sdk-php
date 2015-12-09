<?php

namespace Floream\BusinessLogicServices\SalesLogixService;

class Address
{

    /**
     * @var string $Address1
     */
    protected $Address1 = null;

    /**
     * @var string $Address2
     */
    protected $Address2 = null;

    /**
     * @var string $City
     */
    protected $City = null;

    /**
     * @var Coordinates $Coords
     */
    protected $Coords = null;

    /**
     * @var string $Country
     */
    protected $Country = null;

    /**
     * @var string $County
     */
    protected $County = null;

    /**
     * @var AddressType $Description
     */
    protected $Description = null;

    /**
     * @var string $HouseNo
     */
    protected $HouseNo = null;

    /**
     * @var boolean $IsPrimary
     */
    protected $IsPrimary = null;

    /**
     * @var string $PostCode
     */
    protected $PostCode = null;

    /**
     * @param AddressType $Description
     * @param boolean $IsPrimary
     */
    public function __construct($Description, $IsPrimary)
    {
      $this->Description = $Description;
      $this->IsPrimary = $IsPrimary;
    }

    /**
     * @return string
     */
    public function getAddress1()
    {
      return $this->Address1;
    }

    /**
     * @param string $Address1
     * @return \Floream\BusinessLogicServices\SalesLogixService\Address
     */
    public function setAddress1($Address1)
    {
      $this->Address1 = $Address1;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddress2()
    {
      return $this->Address2;
    }

    /**
     * @param string $Address2
     * @return \Floream\BusinessLogicServices\SalesLogixService\Address
     */
    public function setAddress2($Address2)
    {
      $this->Address2 = $Address2;
      return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
      return $this->City;
    }

    /**
     * @param string $City
     * @return \Floream\BusinessLogicServices\SalesLogixService\Address
     */
    public function setCity($City)
    {
      $this->City = $City;
      return $this;
    }

    /**
     * @return Coordinates
     */
    public function getCoords()
    {
      return $this->Coords;
    }

    /**
     * @param Coordinates $Coords
     * @return \Floream\BusinessLogicServices\SalesLogixService\Address
     */
    public function setCoords($Coords)
    {
      $this->Coords = $Coords;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
      return $this->Country;
    }

    /**
     * @param string $Country
     * @return \Floream\BusinessLogicServices\SalesLogixService\Address
     */
    public function setCountry($Country)
    {
      $this->Country = $Country;
      return $this;
    }

    /**
     * @return string
     */
    public function getCounty()
    {
      return $this->County;
    }

    /**
     * @param string $County
     * @return \Floream\BusinessLogicServices\SalesLogixService\Address
     */
    public function setCounty($County)
    {
      $this->County = $County;
      return $this;
    }

    /**
     * @return AddressType
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param AddressType $Description
     * @return \Floream\BusinessLogicServices\SalesLogixService\Address
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return string
     */
    public function getHouseNo()
    {
      return $this->HouseNo;
    }

    /**
     * @param string $HouseNo
     * @return \Floream\BusinessLogicServices\SalesLogixService\Address
     */
    public function setHouseNo($HouseNo)
    {
      $this->HouseNo = $HouseNo;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPrimary()
    {
      return $this->IsPrimary;
    }

    /**
     * @param boolean $IsPrimary
     * @return \Floream\BusinessLogicServices\SalesLogixService\Address
     */
    public function setIsPrimary($IsPrimary)
    {
      $this->IsPrimary = $IsPrimary;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostCode()
    {
      return $this->PostCode;
    }

    /**
     * @param string $PostCode
     * @return \Floream\BusinessLogicServices\SalesLogixService\Address
     */
    public function setPostCode($PostCode)
    {
      $this->PostCode = $PostCode;
      return $this;
    }

}
