<?php

namespace Floream\BusinessLogicServices\SalesLogixService;

class ValidateSoftwareResponse
{

    /**
     * @var CourseSoftwareEntitiesValidateSoftwareResponse $ValidateSoftwareResult
     */
    protected $ValidateSoftwareResult = null;

    /**
     * @param CourseSoftwareEntitiesValidateSoftwareResponse $ValidateSoftwareResult
     */
    public function __construct($ValidateSoftwareResult)
    {
      $this->ValidateSoftwareResult = $ValidateSoftwareResult;
    }

    /**
     * @return CourseSoftwareEntitiesValidateSoftwareResponse
     */
    public function getValidateSoftwareResult()
    {
      return $this->ValidateSoftwareResult;
    }

    /**
     * @param CourseSoftwareEntitiesValidateSoftwareResponse $ValidateSoftwareResult
     * @return \Floream\BusinessLogicServices\SalesLogixService\ValidateSoftwareResponse
     */
    public function setValidateSoftwareResult($ValidateSoftwareResult)
    {
      $this->ValidateSoftwareResult = $ValidateSoftwareResult;
      return $this;
    }

}
