<?php

namespace AvadoLearning\BusinessLogicServices\SalesLogixService;

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
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\GetPricing
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
