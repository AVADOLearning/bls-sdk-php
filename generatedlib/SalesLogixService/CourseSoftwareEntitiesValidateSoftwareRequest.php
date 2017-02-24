<?php

namespace AvadoLearning\BusinessLogicServices\SalesLogixService;

class CourseSoftwareEntitiesValidateSoftwareRequest extends ServiceRequest
{

    /**
     * @var string $EnrolmentNumber
     */
    protected $EnrolmentNumber = null;

    /**
     * @var boolean $IsMobileApp
     */
    protected $IsMobileApp = null;

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
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\CourseSoftwareEntities.ValidateSoftwareRequest
     */
    public function setEnrolmentNumber($EnrolmentNumber)
    {
      $this->EnrolmentNumber = $EnrolmentNumber;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsMobileApp()
    {
      return $this->IsMobileApp;
    }

    /**
     * @param boolean $IsMobileApp
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\CourseSoftwareEntities.ValidateSoftwareRequest
     */
    public function setIsMobileApp($IsMobileApp)
    {
      $this->IsMobileApp = $IsMobileApp;
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
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\CourseSoftwareEntities.ValidateSoftwareRequest
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
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\CourseSoftwareEntities.ValidateSoftwareRequest
     */
    public function setSoftware($Software)
    {
      $this->Software = $Software;
      return $this;
    }

}
