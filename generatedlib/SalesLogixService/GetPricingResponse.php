<?php

namespace AvadoLearning\BusinessLogicServices\SalesLogixService;

class GetPricingResponse
{

    /**
     * @var ProductEntitiesProductPricingResponse $GetPricingResult
     */
    protected $GetPricingResult = null;

    /**
     * @param ProductEntitiesProductPricingResponse $GetPricingResult
     */
    public function __construct($GetPricingResult)
    {
      $this->GetPricingResult = $GetPricingResult;
    }

    /**
     * @return ProductEntitiesProductPricingResponse
     */
    public function getGetPricingResult()
    {
      return $this->GetPricingResult;
    }

    /**
     * @param ProductEntitiesProductPricingResponse $GetPricingResult
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\GetPricingResponse
     */
    public function setGetPricingResult($GetPricingResult)
    {
      $this->GetPricingResult = $GetPricingResult;
      return $this;
    }

}
