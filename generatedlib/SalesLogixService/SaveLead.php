<?php

namespace Floream\BusinessLogicServices\SalesLogixService;

class SaveLead
{

    /**
     * @var SaveLeadEntitiesSaveLeadRequest $request
     */
    protected $request = null;

    /**
     * @param SaveLeadEntitiesSaveLeadRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return SaveLeadEntitiesSaveLeadRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param SaveLeadEntitiesSaveLeadRequest $request
     * @return \Floream\BusinessLogicServices\SalesLogixService\SaveLead
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
