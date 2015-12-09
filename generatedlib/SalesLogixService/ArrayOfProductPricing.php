<?php

namespace Floream\BusinessLogicServices\SalesLogixService;

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
     * @return \Floream\BusinessLogicServices\SalesLogixService\ArrayOfProductPricing
     */
    public function setProductPricing(array $ProductPricing)
    {
      $this->ProductPricing = $ProductPricing;
      return $this;
    }

}
