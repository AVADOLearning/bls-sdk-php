<?php

namespace Floream\BusinessLogicServices\SalesLogixService;

class CourseSoftwareEntitiesValidateSoftwareRequest extends ServiceRequest
{

    /**
     * @var string $EnrolmentNumber
     */
    protected $EnrolmentNumber = null;

    /**
     * @var string $SerialNumber
     */
    protected $SerialNumber = null;

    /**
     * @var CourseSoftwareEntitiesSoftwareType $Software
     */
    protected $Software = null;

    /**
     * @param CourseSoftwareEntitiesSoftwareType $Software
     */
    public function __construct($Software)
    {
      $this->Software = $Software;
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
     * @return \Floream\BusinessLogicServices\SalesLogixService\CourseSoftwareEntities.ValidateSoftwareRequest
     */
    public function setEnrolmentNumber($EnrolmentNumber)
    {
      $this->EnrolmentNumber = $EnrolmentNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getSerialNumber()
    {
      return $this->SerialNumber;
    }

    /**
     * @param string $SerialNumber
     * @return \Floream\BusinessLogicServices\SalesLogixService\CourseSoftwareEntities.ValidateSoftwareRequest
     */
    public function setSerialNumber($SerialNumber)
    {
      $this->SerialNumber = $SerialNumber;
      return $this;
    }

    /**
     * @return CourseSoftwareEntitiesSoftwareType
     */
    public function getSoftware()
    {
      return $this->Software;
    }

    /**
     * @param CourseSoftwareEntitiesSoftwareType $Software
     * @return \Floream\BusinessLogicServices\SalesLogixService\CourseSoftwareEntities.ValidateSoftwareRequest
     */
    public function setSoftware($Software)
    {
      $this->Software = $Software;
      return $this;
    }

}
