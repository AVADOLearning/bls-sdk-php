<?php

namespace AvadoLearning\BusinessLogicServices\SalesLogixService;

class CreateLeadResponse
{

    /**
     * @var CreateLeadEntitiesCreateLeadResponse $CreateLeadResult
     */
    protected $CreateLeadResult = null;

    /**
     * @param CreateLeadEntitiesCreateLeadResponse $CreateLeadResult
     */
    public function __construct($CreateLeadResult)
    {
      $this->CreateLeadResult = $CreateLeadResult;
    }

    /**
     * @return CreateLeadEntitiesCreateLeadResponse
     */
    public function getCreateLeadResult()
    {
      return $this->CreateLeadResult;
    }

    /**
     * @param CreateLeadEntitiesCreateLeadResponse $CreateLeadResult
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\CreateLeadResponse
     */
    public function setCreateLeadResult($CreateLeadResult)
    {
      $this->CreateLeadResult = $CreateLeadResult;
      return $this;
    }

}
