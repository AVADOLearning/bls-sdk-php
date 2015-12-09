<?php

namespace Floream\BusinessLogicServices\SalesLogixService;

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
     * @return \Floream\BusinessLogicServices\SalesLogixService\ValidateEntities.ValidateStudentRequest
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
     * @return \Floream\BusinessLogicServices\SalesLogixService\ValidateEntities.ValidateStudentRequest
     */
    public function setLastName($LastName)
    {
      $this->LastName = $LastName;
      return $this;
    }

}
