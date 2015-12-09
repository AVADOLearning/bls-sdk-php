<?php

namespace Floream\BusinessLogicServices\SalesLogixService;

class ProductEntitiesProductPricingRequest extends ServiceRequest
{

    /**
     * @var string $ProductCode
     */
    protected $ProductCode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getProductCode()
    {
      return $this->ProductCode;
    }

    /**
     * @param string $ProductCode
     * @return \Floream\BusinessLogicServices\SalesLogixService\ProductEntities.ProductPricingRequest
     */
    public function setProductCode($ProductCode)
    {
      $this->ProductCode = $ProductCode;
      return $this;
    }

}
