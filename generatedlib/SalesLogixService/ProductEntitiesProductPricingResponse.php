<?php

namespace Floream\BusinessLogicServices\SalesLogixService;

class ProductEntitiesProductPricingResponse extends ServiceResponse
{

    /**
     * @var ArrayOfProductPricing $Pricing
     */
    protected $Pricing = null;

    /**
     * @param ResponseStatus $Status
     */
    public function __construct($Status)
    {
      parent::__construct($Status);
    }

    /**
     * @return ArrayOfProductPricing
     */
    public function getPricing()
    {
      return $this->Pricing;
    }

    /**
     * @param ArrayOfProductPricing $Pricing
     * @return \Floream\BusinessLogicServices\SalesLogixService\ProductEntities.ProductPricingResponse
     */
    public function setPricing($Pricing)
    {
      $this->Pricing = $Pricing;
      return $this;
    }

}
