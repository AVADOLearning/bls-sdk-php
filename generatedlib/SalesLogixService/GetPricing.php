<?php

namespace Floream\BusinessLogicServices\SalesLogixService;

class GetPricing
{

    /**
     * @var ProductEntitiesProductPricingRequest $request
     */
    protected $request = null;

    /**
     * @param ProductEntitiesProductPricingRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return ProductEntitiesProductPricingRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param ProductEntitiesProductPricingRequest $request
     * @return \Floream\BusinessLogicServices\SalesLogixService\GetPricing
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
