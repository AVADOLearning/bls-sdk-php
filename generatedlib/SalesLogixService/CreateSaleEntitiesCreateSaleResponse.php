<?php

namespace Floream\BusinessLogicServices\SalesLogixService;

class CreateSaleEntitiesCreateSaleResponse extends ServiceResponse
{

    /**
     * @var CreateSaleEntitiesIdentity $Opportunity
     */
    protected $Opportunity = null;

    /**
     * @param ResponseStatus $Status
     */
    public function __construct($Status)
    {
      parent::__construct($Status);
    }

    /**
     * @return CreateSaleEntitiesIdentity
     */
    public function getOpportunity()
    {
      return $this->Opportunity;
    }

    /**
     * @param CreateSaleEntitiesIdentity $Opportunity
     * @return \Floream\BusinessLogicServices\SalesLogixService\CreateSaleEntities.CreateSaleResponse
     */
    public function setOpportunity($Opportunity)
    {
      $this->Opportunity = $Opportunity;
      return $this;
    }

}
