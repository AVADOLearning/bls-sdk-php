<?php

namespace AvadoLearning\BusinessLogicServices\SalesLogixService;

class CreateSaleResponse
{

    /**
     * @var CreateSaleEntitiesCreateSaleResponse $CreateSaleResult
     */
    protected $CreateSaleResult = null;

    /**
     * @param CreateSaleEntitiesCreateSaleResponse $CreateSaleResult
     */
    public function __construct($CreateSaleResult)
    {
      $this->CreateSaleResult = $CreateSaleResult;
    }

    /**
     * @return CreateSaleEntitiesCreateSaleResponse
     */
    public function getCreateSaleResult()
    {
      return $this->CreateSaleResult;
    }

    /**
     * @param CreateSaleEntitiesCreateSaleResponse $CreateSaleResult
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\CreateSaleResponse
     */
    public function setCreateSaleResult($CreateSaleResult)
    {
      $this->CreateSaleResult = $CreateSaleResult;
      return $this;
    }

}
