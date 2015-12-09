<?php

namespace Floream\BusinessLogicServices\SalesLogixService;

class Product
{

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var string $Family
     */
    protected $Family = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var float $Quantity
     */
    protected $Quantity = null;

    /**
     * @param float $Quantity
     */
    public function __construct($Quantity)
    {
      $this->Quantity = $Quantity;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param string $Code
     * @return \Floream\BusinessLogicServices\SalesLogixService\Product
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return string
     */
    public function getFamily()
    {
      return $this->Family;
    }

    /**
     * @param string $Family
     * @return \Floream\BusinessLogicServices\SalesLogixService\Product
     */
    public function setFamily($Family)
    {
      $this->Family = $Family;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \Floream\BusinessLogicServices\SalesLogixService\Product
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return float
     */
    public function getQuantity()
    {
      return $this->Quantity;
    }

    /**
     * @param float $Quantity
     * @return \Floream\BusinessLogicServices\SalesLogixService\Product
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
      return $this;
    }

}
