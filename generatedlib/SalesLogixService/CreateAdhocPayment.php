<?php

namespace Floream\BusinessLogicServices\SalesLogixService;

class CreateAdhocPayment
{

    /**
     * @var CreateSaleEntitiesCreateAdhocPaymentRequest $request
     */
    protected $request = null;

    /**
     * @param CreateSaleEntitiesCreateAdhocPaymentRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return CreateSaleEntitiesCreateAdhocPaymentRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param CreateSaleEntitiesCreateAdhocPaymentRequest $request
     * @return \Floream\BusinessLogicServices\SalesLogixService\CreateAdhocPayment
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
