<?php

namespace Floream\BusinessLogicServices\SalesLogixService;

class ValidateStudent
{

    /**
     * @var ValidateEntitiesValidateStudentRequest $request
     */
    protected $request = null;

    /**
     * @param ValidateEntitiesValidateStudentRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return ValidateEntitiesValidateStudentRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param ValidateEntitiesValidateStudentRequest $request
     * @return \Floream\BusinessLogicServices\SalesLogixService\ValidateStudent
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
