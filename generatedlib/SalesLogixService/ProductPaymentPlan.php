<?php

namespace AvadoLearning\BusinessLogicServices\SalesLogixService;

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
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\ProductPaymentPlan
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
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\ProductPaymentPlan
     */
    public function setProduct($Product)
    {
      $this->Product = $Product;
      return $this;
    }

}
