<?php

namespace AvadoLearning\BusinessLogicServices\SalesLogixService;

class ValidateEntitiesValidateStudentRequest extends ServiceRequest
{

    /**
     * @var string $EnrolmentNumber
     */
    protected $EnrolmentNumber = null;

    /**
     * @var string $LastName
     */
    protected $LastName = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getEnrolmentNumber()
    {
      return $this->EnrolmentNumber;
    }

    /**
     * @param string $EnrolmentNumber
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\ValidateEntities.ValidateStudentRequest
     */
    public function setEnrolmentNumber($EnrolmentNumber)
    {
      $this->EnrolmentNumber = $EnrolmentNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
      return $this->LastName;
    }

    /**
     * @param string $LastName
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\ValidateEntities.ValidateStudentRequest
     */
    public function setLastName($LastName)
    {
      $this->LastName = $LastName;
      return $this;
    }

}
