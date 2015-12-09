<?php

namespace Floream\BusinessLogicServices\SalesLogixService;

class ServiceResponse
{

    /**
     * @var string $Id
     */
    protected $Id = null;

    /**
     * @var string $Message
     */
    protected $Message = null;

    /**
     * @var ArrayOfValidationMessage $MessageDetails
     */
    protected $MessageDetails = null;

    /**
     * @var ResponseStatus $Status
     */
    protected $Status = null;

    /**
     * @param ResponseStatus $Status
     */
    public function __construct($Status)
    {
      $this->Status = $Status;
    }

    /**
     * @return string
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param string $Id
     * @return \Floream\BusinessLogicServices\SalesLogixService\ServiceResponse
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
      return $this->Message;
    }

    /**
     * @param string $Message
     * @return \Floream\BusinessLogicServices\SalesLogixService\ServiceResponse
     */
    public function setMessage($Message)
    {
      $this->Message = $Message;
      return $this;
    }

    /**
     * @return ArrayOfValidationMessage
     */
    public function getMessageDetails()
    {
      return $this->MessageDetails;
    }

    /**
     * @param ArrayOfValidationMessage $MessageDetails
     * @return \Floream\BusinessLogicServices\SalesLogixService\ServiceResponse
     */
    public function setMessageDetails($MessageDetails)
    {
      $this->MessageDetails = $MessageDetails;
      return $this;
    }

    /**
     * @return ResponseStatus
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param ResponseStatus $Status
     * @return \Floream\BusinessLogicServices\SalesLogixService\ServiceResponse
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

}
