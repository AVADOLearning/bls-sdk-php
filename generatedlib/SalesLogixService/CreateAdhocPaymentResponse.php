<?php

namespace AvadoLearning\BusinessLogicServices\SalesLogixService;

class CreateAdhocPaymentResponse
{

    /**
     * @var CreateSaleEntitiesCreateSaleResponse $CreateAdhocPaymentResult
     */
    protected $CreateAdhocPaymentResult = null;

    /**
     * @param CreateSaleEntitiesCreateSaleResponse $CreateAdhocPaymentResult
     */
    public function __construct($CreateAdhocPaymentResult)
    {
      $this->CreateAdhocPaymentResult = $CreateAdhocPaymentResult;
    }

    /**
     * @return CreateSaleEntitiesCreateSaleResponse
     */
    public function getCreateAdhocPaymentResult()
    {
      return $this->CreateAdhocPaymentResult;
    }

    /**
     * @param CreateSaleEntitiesCreateSaleResponse $CreateAdhocPaymentResult
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\CreateAdhocPaymentResponse
     */
    public function setCreateAdhocPaymentResult($CreateAdhocPaymentResult)
    {
      $this->CreateAdhocPaymentResult = $CreateAdhocPaymentResult;
      return $this;
    }

}
