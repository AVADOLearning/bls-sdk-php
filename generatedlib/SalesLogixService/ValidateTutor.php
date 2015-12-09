<?php

namespace Floream\BusinessLogicServices\SalesLogixService;

class ValidateTutor
{

    /**
     * @var ValidateEntitiesValidateTutorRequest $request
     */
    protected $request = null;

    /**
     * @param ValidateEntitiesValidateTutorRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return ValidateEntitiesValidateTutorRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param ValidateEntitiesValidateTutorRequest $request
     * @return \Floream\BusinessLogicServices\SalesLogixService\ValidateTutor
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
