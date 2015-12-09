<?php

namespace Floream\BusinessLogicServices\SalesLogixService;

class ValidateTutorResponse
{

    /**
     * @var ValidateEntitiesValidateTutorResponse $ValidateTutorResult
     */
    protected $ValidateTutorResult = null;

    /**
     * @param ValidateEntitiesValidateTutorResponse $ValidateTutorResult
     */
    public function __construct($ValidateTutorResult)
    {
      $this->ValidateTutorResult = $ValidateTutorResult;
    }

    /**
     * @return ValidateEntitiesValidateTutorResponse
     */
    public function getValidateTutorResult()
    {
      return $this->ValidateTutorResult;
    }

    /**
     * @param ValidateEntitiesValidateTutorResponse $ValidateTutorResult
     * @return \Floream\BusinessLogicServices\SalesLogixService\ValidateTutorResponse
     */
    public function setValidateTutorResult($ValidateTutorResult)
    {
      $this->ValidateTutorResult = $ValidateTutorResult;
      return $this;
    }

}
