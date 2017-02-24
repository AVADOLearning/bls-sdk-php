<?php

namespace AvadoLearning\BusinessLogicServices\SalesLogixService;

class StoreResponse extends ServiceResponse
{

    /**
     * @var guid $StoreGuid
     */
    protected $StoreGuid = null;

    /**
     * @param ResponseStatus $Status
     * @param guid $StoreGuid
     */
    public function __construct($Status, $StoreGuid)
    {
      parent::__construct($Status);
      $this->StoreGuid = $StoreGuid;
    }

    /**
     * @return guid
     */
    public function getStoreGuid()
    {
      return $this->StoreGuid;
    }

    /**
     * @param guid $StoreGuid
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\StoreResponse
     */
    public function setStoreGuid($StoreGuid)
    {
      $this->StoreGuid = $StoreGuid;
      return $this;
    }

}
