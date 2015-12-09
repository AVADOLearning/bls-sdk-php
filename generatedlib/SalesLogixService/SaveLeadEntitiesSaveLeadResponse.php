<?php

namespace Floream\BusinessLogicServices\SalesLogixService;

class SaveLeadEntitiesSaveLeadResponse extends StoreResponse
{

    /**
     * @var CreateLeadEntitiesCreateLeadResponse $ServiceResponse
     */
    protected $ServiceResponse = null;

    /**
     * @param ResponseStatus $Status
     * @param guid $StoreGuid
     */
    public function __construct($Status, $StoreGuid)
    {
      parent::__construct($Status, $StoreGuid);
    }

    /**
     * @return CreateLeadEntitiesCreateLeadResponse
     */
    public function getServiceResponse()
    {
      return $this->ServiceResponse;
    }

    /**
     * @param CreateLeadEntitiesCreateLeadResponse $ServiceResponse
     * @return \Floream\BusinessLogicServices\SalesLogixService\SaveLeadEntities.SaveLeadResponse
     */
    public function setServiceResponse($ServiceResponse)
    {
      $this->ServiceResponse = $ServiceResponse;
      return $this;
    }

}
