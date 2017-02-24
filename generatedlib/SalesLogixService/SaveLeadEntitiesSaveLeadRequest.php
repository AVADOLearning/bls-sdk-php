<?php

namespace AvadoLearning\BusinessLogicServices\SalesLogixService;

class SaveLeadEntitiesSaveLeadRequest extends StoreRequest
{

    /**
     * @var CreateLeadEntitiesCreateLeadRequest $ServiceRequest
     */
    protected $ServiceRequest = null;

    /**
     * @param guid $StoreGuid
     */
    public function __construct($StoreGuid)
    {
      parent::__construct($StoreGuid);
    }

    /**
     * @return CreateLeadEntitiesCreateLeadRequest
     */
    public function getServiceRequest()
    {
      return $this->ServiceRequest;
    }

    /**
     * @param CreateLeadEntitiesCreateLeadRequest $ServiceRequest
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\SaveLeadEntities.SaveLeadRequest
     */
    public function setServiceRequest($ServiceRequest)
    {
      $this->ServiceRequest = $ServiceRequest;
      return $this;
    }

}
