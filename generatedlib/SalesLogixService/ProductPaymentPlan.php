<?php

namespace Floream\BusinessLogicServices\SalesLogixService;

class ProductPaymentPlan
{

    /**
     * @var float $Price
     */
    protected $Price = null;

    /**
     * @var string $Product
     */
    protected $Product = null;

    /**
     * @param float $Price
     */
    public function __construct($Price)
    {
      $this->Price = $Price;
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
     * @return \Floream\BusinessLogicServices\SalesLogixService\ProductPaymentPlan
     */
    public function setPrice($Price)
    {
      $this->Price = $Price;
      return $this;
    }

    /**
     * @return string
     */
    public function getProduct()
    {
      return $this->Product;
    }

    /**
     * @param string $Product
     * @return \Floream\BusinessLogicServices\SalesLogixService\ProductPaymentPlan
     */
    public function setProduct($Product)
    {
      $this->Product = $Product;
      return $this;
    }

}
