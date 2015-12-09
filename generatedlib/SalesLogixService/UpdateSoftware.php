<?php

namespace Floream\BusinessLogicServices\SalesLogixService;

class UpdateSoftware
{

    /**
     * @var CourseSoftwareEntitiesUpdateSoftwareRequest $request
     */
    protected $request = null;

    /**
     * @param CourseSoftwareEntitiesUpdateSoftwareRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return CourseSoftwareEntitiesUpdateSoftwareRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param CourseSoftwareEntitiesUpdateSoftwareRequest $request
     * @return \Floream\BusinessLogicServices\SalesLogixService\UpdateSoftware
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
