<?php

namespace Floream\BusinessLogicServices\SalesLogixService;

class ValidateStudentOpportunityResponse
{

    /**
     * @var ValidateEntitiesValidateStudentResponse $ValidateStudentOpportunityResult
     */
    protected $ValidateStudentOpportunityResult = null;

    /**
     * @param ValidateEntitiesValidateStudentResponse $ValidateStudentOpportunityResult
     */
    public function __construct($ValidateStudentOpportunityResult)
    {
      $this->ValidateStudentOpportunityResult = $ValidateStudentOpportunityResult;
    }

    /**
     * @return ValidateEntitiesValidateStudentResponse
     */
    public function getValidateStudentOpportunityResult()
    {
      return $this->ValidateStudentOpportunityResult;
    }

    /**
     * @param ValidateEntitiesValidateStudentResponse $ValidateStudentOpportunityResult
     * @return \Floream\BusinessLogicServices\SalesLogixService\ValidateStudentOpportunityResponse
     */
    public function setValidateStudentOpportunityResult($ValidateStudentOpportunityResult)
    {
      $this->ValidateStudentOpportunityResult = $ValidateStudentOpportunityResult;
      return $this;
    }

}
