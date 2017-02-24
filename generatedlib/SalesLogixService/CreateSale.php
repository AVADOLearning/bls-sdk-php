<?php

namespace AvadoLearning\BusinessLogicServices\SalesLogixService;

class CreateSale
{

    /**
     * @var CreateSaleEntitiesCreateSaleRequest $request
     */
    protected $request = null;

    /**
     * @param CreateSaleEntitiesCreateSaleRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return CreateSaleEntitiesCreateSaleRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param CreateSaleEntitiesCreateSaleRequest $request
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\CreateSale
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
