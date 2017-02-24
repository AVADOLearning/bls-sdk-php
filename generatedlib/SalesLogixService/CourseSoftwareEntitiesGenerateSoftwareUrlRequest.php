<?php

namespace AvadoLearning\BusinessLogicServices\SalesLogixService;

class CourseSoftwareEntitiesGenerateSoftwareUrlRequest extends ServiceRequest
{

    /**
     * @var ArrayOfKeyValueOfstringanyType $Data
     */
    protected $Data = null;

    /**
     * @var boolean $IsAdministrator
     */
    protected $IsAdministrator = null;

    /**
     * @var CourseSoftwareEntitiesSoftwareType $Software
     */
    protected $Software = null;

    /**
     * @param boolean $IsAdministrator
     * @param CourseSoftwareEntitiesSoftwareType $Software
     */
    public function __construct($IsAdministrator, $Software)
    {
      $this->IsAdministrator = $IsAdministrator;
      $this->Software = $Software;
    }

    /**
     * @return ArrayOfKeyValueOfstringanyType
     */
    public function getData()
    {
      return $this->Data;
    }

    /**
     * @param ArrayOfKeyValueOfstringanyType $Data
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\CourseSoftwareEntities.GenerateSoftwareUrlRequest
     */
    public function setData($Data)
    {
      $this->Data = $Data;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsAdministrator()
    {
      return $this->IsAdministrator;
    }

    /**
     * @param boolean $IsAdministrator
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\CourseSoftwareEntities.GenerateSoftwareUrlRequest
     */
    public function setIsAdministrator($IsAdministrator)
    {
      $this->IsAdministrator = $IsAdministrator;
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
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\CourseSoftwareEntities.GenerateSoftwareUrlRequest
     */
    public function setSoftware($Software)
    {
      $this->Software = $Software;
      return $this;
    }

}
