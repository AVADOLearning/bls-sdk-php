<?php

namespace Floream\BusinessLogicServices\SalesLogixService;

class ValidateStudentOpportunity
{

    /**
     * @var ValidateEntitiesValidateStudentOpportunityRequest $request
     */
    protected $request = null;

    /**
     * @param ValidateEntitiesValidateStudentOpportunityRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return ValidateEntitiesValidateStudentOpportunityRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param ValidateEntitiesValidateStudentOpportunityRequest $request
     * @return \Floream\BusinessLogicServices\SalesLogixService\ValidateStudentOpportunity
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
