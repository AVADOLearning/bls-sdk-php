<?php

namespace Floream\BusinessLogicServices\SalesLogixService;

class ValidateEntitiesValidateStudentOpportunityRequest extends ServiceRequest
{

    /**
     * @var string $OpportunityId
     */
    protected $OpportunityId = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getOpportunityId()
    {
      return $this->OpportunityId;
    }

    /**
     * @param string $OpportunityId
     * @return \Floream\BusinessLogicServices\SalesLogixService\ValidateEntities.ValidateStudentOpportunityRequest
     */
    public function setOpportunityId($OpportunityId)
    {
      $this->OpportunityId = $OpportunityId;
      return $this;
    }

}
