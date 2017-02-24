<?php

namespace AvadoLearning\BusinessLogicServices\SalesLogixService;

class CreateLead
{

    /**
     * @var CreateLeadEntitiesCreateLeadRequest $request
     */
    protected $request = null;

    /**
     * @param CreateLeadEntitiesCreateLeadRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return CreateLeadEntitiesCreateLeadRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param CreateLeadEntitiesCreateLeadRequest $request
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\CreateLead
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
