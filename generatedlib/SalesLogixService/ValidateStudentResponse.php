<?php

namespace Floream\BusinessLogicServices\SalesLogixService;

class ValidateStudentResponse
{

    /**
     * @var ValidateEntitiesValidateStudentResponse $ValidateStudentResult
     */
    protected $ValidateStudentResult = null;

    /**
     * @param ValidateEntitiesValidateStudentResponse $ValidateStudentResult
     */
    public function __construct($ValidateStudentResult)
    {
      $this->ValidateStudentResult = $ValidateStudentResult;
    }

    /**
     * @return ValidateEntitiesValidateStudentResponse
     */
    public function getValidateStudentResult()
    {
      return $this->ValidateStudentResult;
    }

    /**
     * @param ValidateEntitiesValidateStudentResponse $ValidateStudentResult
     * @return \Floream\BusinessLogicServices\SalesLogixService\ValidateStudentResponse
     */
    public function setValidateStudentResult($ValidateStudentResult)
    {
      $this->ValidateStudentResult = $ValidateStudentResult;
      return $this;
    }

}
