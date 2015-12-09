<?php

namespace Floream\BusinessLogicServices\SalesLogixService;

class ArrayOfValidationMessage
{

    /**
     * @var ValidationMessage[] $ValidationMessage
     */
    protected $ValidationMessage = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ValidationMessage[]
     */
    public function getValidationMessage()
    {
      return $this->ValidationMessage;
    }

    /**
     * @param ValidationMessage[] $ValidationMessage
     * @return \Floream\BusinessLogicServices\SalesLogixService\ArrayOfValidationMessage
     */
    public function setValidationMessage(array $ValidationMessage)
    {
      $this->ValidationMessage = $ValidationMessage;
      return $this;
    }

}
