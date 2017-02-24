<?php

namespace AvadoLearning\BusinessLogicServices\SalesLogixService;

class GenerateSoftwareUrl
{

    /**
     * @var CourseSoftwareEntitiesGenerateSoftwareUrlRequest $request
     */
    protected $request = null;

    /**
     * @param CourseSoftwareEntitiesGenerateSoftwareUrlRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return CourseSoftwareEntitiesGenerateSoftwareUrlRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param CourseSoftwareEntitiesGenerateSoftwareUrlRequest $request
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\GenerateSoftwareUrl
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
