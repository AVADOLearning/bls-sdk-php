<?php

namespace Floream\BusinessLogicServices\SalesLogixService;

class StoreRequest extends ServiceRequest
{

    /**
     * @var guid $StoreGuid
     */
    protected $StoreGuid = null;

    /**
     * @var boolean $SubmitRequest
     */
    protected $SubmitRequest = null;

    /**
     * @param guid $StoreGuid
     */
    public function __construct($StoreGuid)
    {
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
     * @return \Floream\BusinessLogicServices\SalesLogixService\StoreRequest
     */
    public function setStoreGuid($StoreGuid)
    {
      $this->StoreGuid = $StoreGuid;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSubmitRequest()
    {
      return $this->SubmitRequest;
    }

    /**
     * @param boolean $SubmitRequest
     * @return \Floream\BusinessLogicServices\SalesLogixService\StoreRequest
     */
    public function setSubmitRequest($SubmitRequest)
    {
      $this->SubmitRequest = $SubmitRequest;
      return $this;
    }

}
