<?php

namespace AvadoLearning\BusinessLogicServices\SalesLogixService;

class ValidationMessage
{

    /**
     * @var string $Message
     */
    protected $Message = null;

    /**
     * @var string $Reference
     */
    protected $Reference = null;

    
    public function __construct()
    {
    
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
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\ValidationMessage
     */
    public function setMessage($Message)
    {
      $this->Message = $Message;
      return $this;
    }

    /**
     * @return string
     */
    public function getReference()
    {
      return $this->Reference;
    }

    /**
     * @param string $Reference
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\ValidationMessage
     */
    public function setReference($Reference)
    {
      $this->Reference = $Reference;
      return $this;
    }

}
