<?php

namespace AvadoLearning\BusinessLogicServices\SalesLogixService;

class ArrayOfProductPricing
{

    /**
     * @var ProductPricing[] $ProductPricing
     */
    protected $ProductPricing = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ProductPricing[]
     */
    public function getProductPricing()
    {
      return $this->ProductPricing;
    }

    /**
     * @param ProductPricing[] $ProductPricing
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\ArrayOfProductPricing
     */
    public function setProductPricing(array $ProductPricing)
    {
      $this->ProductPricing = $ProductPricing;
      return $this;
    }

}
