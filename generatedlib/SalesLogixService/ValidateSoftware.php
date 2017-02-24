<?php

namespace AvadoLearning\BusinessLogicServices\SalesLogixService;

class ValidateSoftware
{

    /**
     * @var CourseSoftwareEntitiesValidateSoftwareRequest $request
     */
    protected $request = null;

    /**
     * @param CourseSoftwareEntitiesValidateSoftwareRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return CourseSoftwareEntitiesValidateSoftwareRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param CourseSoftwareEntitiesValidateSoftwareRequest $request
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\ValidateSoftware
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
