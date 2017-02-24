<?php

namespace AvadoLearning\BusinessLogicServices\SalesLogixService;

class GenerateSoftwareUrlResponse
{

    /**
     * @var CourseSoftwareEntitiesGenerateSoftwareUrlResponse $GenerateSoftwareUrlResult
     */
    protected $GenerateSoftwareUrlResult = null;

    /**
     * @param CourseSoftwareEntitiesGenerateSoftwareUrlResponse $GenerateSoftwareUrlResult
     */
    public function __construct($GenerateSoftwareUrlResult)
    {
      $this->GenerateSoftwareUrlResult = $GenerateSoftwareUrlResult;
    }

    /**
     * @return CourseSoftwareEntitiesGenerateSoftwareUrlResponse
     */
    public function getGenerateSoftwareUrlResult()
    {
      return $this->GenerateSoftwareUrlResult;
    }

    /**
     * @param CourseSoftwareEntitiesGenerateSoftwareUrlResponse $GenerateSoftwareUrlResult
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\GenerateSoftwareUrlResponse
     */
    public function setGenerateSoftwareUrlResult($GenerateSoftwareUrlResult)
    {
      $this->GenerateSoftwareUrlResult = $GenerateSoftwareUrlResult;
      return $this;
    }

}
