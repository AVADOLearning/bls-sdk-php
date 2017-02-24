<?php

namespace AvadoLearning\BusinessLogicServices\SalesLogixService;

class ValidateSoftware2Response
{

    /**
     * @var CourseSoftwareEntitiesValidateSoftwareResponse2 $ValidateSoftware2Result
     */
    protected $ValidateSoftware2Result = null;

    /**
     * @param CourseSoftwareEntitiesValidateSoftwareResponse2 $ValidateSoftware2Result
     */
    public function __construct($ValidateSoftware2Result)
    {
      $this->ValidateSoftware2Result = $ValidateSoftware2Result;
    }

    /**
     * @return CourseSoftwareEntitiesValidateSoftwareResponse2
     */
    public function getValidateSoftware2Result()
    {
      return $this->ValidateSoftware2Result;
    }

    /**
     * @param CourseSoftwareEntitiesValidateSoftwareResponse2 $ValidateSoftware2Result
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\ValidateSoftware2Response
     */
    public function setValidateSoftware2Result($ValidateSoftware2Result)
    {
      $this->ValidateSoftware2Result = $ValidateSoftware2Result;
      return $this;
    }

}
