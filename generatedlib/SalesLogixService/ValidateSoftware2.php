<?php

namespace AvadoLearning\BusinessLogicServices\SalesLogixService;

class ValidateSoftware2
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
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\ValidateSoftware2
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
