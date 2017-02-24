<?php

namespace AvadoLearning\BusinessLogicServices\SalesLogixService;

class ProductPricing
{

    /**
     * @var float $BasePrice
     */
    protected $BasePrice = null;

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var float $Deposit
     */
    protected $Deposit = null;

    /**
     * @var float $GoodsPrice
     */
    protected $GoodsPrice = null;

    /**
     * @var float $InstalmentPrice
     */
    protected $InstalmentPrice = null;

    /**
     * @var int $Instalments
     */
    protected $Instalments = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var float $Price
     */
    protected $Price = null;

    /**
     * @var string $Program
     */
    protected $Program = null;

    /**
     * @var float $ServicesPrice
     */
    protected $ServicesPrice = null;

    /**
     * @param float $BasePrice
     * @param float $Deposit
     * @param float $GoodsPrice
     * @param float $InstalmentPrice
     * @param int $Instalments
     * @param float $Price
     * @param float $ServicesPrice
     */
    public function __construct($BasePrice, $Deposit, $GoodsPrice, $InstalmentPrice, $Instalments, $Price, $ServicesPrice)
    {
      $this->BasePrice = $BasePrice;
      $this->Deposit = $Deposit;
      $this->GoodsPrice = $GoodsPrice;
      $this->InstalmentPrice = $InstalmentPrice;
      $this->Instalments = $Instalments;
      $this->Price = $Price;
      $this->ServicesPrice = $ServicesPrice;
    }

    /**
     * @return float
     */
    public function getBasePrice()
    {
      return $this->BasePrice;
    }

    /**
     * @param float $BasePrice
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\ProductPricing
     */
    public function setBasePrice($BasePrice)
    {
      $this->BasePrice = $BasePrice;
      return $this;
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
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\ProductPricing
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return float
     */
    public function getDeposit()
    {
      return $this->Deposit;
    }

    /**
     * @param float $Deposit
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\ProductPricing
     */
    public function setDeposit($Deposit)
    {
      $this->Deposit = $Deposit;
      return $this;
    }

    /**
     * @return float
     */
    public function getGoodsPrice()
    {
      return $this->GoodsPrice;
    }

    /**
     * @param float $GoodsPrice
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\ProductPricing
     */
    public function setGoodsPrice($GoodsPrice)
    {
      $this->GoodsPrice = $GoodsPrice;
      return $this;
    }

    /**
     * @return float
     */
    public function getInstalmentPrice()
    {
      return $this->InstalmentPrice;
    }

    /**
     * @param float $InstalmentPrice
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\ProductPricing
     */
    public function setInstalmentPrice($InstalmentPrice)
    {
      $this->InstalmentPrice = $InstalmentPrice;
      return $this;
    }

    /**
     * @return int
     */
    public function getInstalments()
    {
      return $this->Instalments;
    }

    /**
     * @param int $Instalments
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\ProductPricing
     */
    public function setInstalments($Instalments)
    {
      $this->Instalments = $Instalments;
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
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\ProductPricing
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
      return $this->Price;
    }

    /**
     * @param float $Price
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\ProductPricing
     */
    public function setPrice($Price)
    {
      $this->Price = $Price;
      return $this;
    }

    /**
     * @return string
     */
    public function getProgram()
    {
      return $this->Program;
    }

    /**
     * @param string $Program
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\ProductPricing
     */
    public function setProgram($Program)
    {
      $this->Program = $Program;
      return $this;
    }

    /**
     * @return float
     */
    public function getServicesPrice()
    {
      return $this->ServicesPrice;
    }

    /**
     * @param float $ServicesPrice
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\ProductPricing
     */
    public function setServicesPrice($ServicesPrice)
    {
      $this->ServicesPrice = $ServicesPrice;
      return $this;
    }

}
