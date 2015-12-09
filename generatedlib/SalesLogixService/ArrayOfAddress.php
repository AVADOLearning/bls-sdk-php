<?php

namespace Floream\BusinessLogicServices\SalesLogixService;

class ArrayOfAddress
{

    /**
     * @var Address[] $Address
     */
    protected $Address = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Address[]
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param Address[] $Address
     * @return \Floream\BusinessLogicServices\SalesLogixService\ArrayOfAddress
     */
    public function setAddress(array $Address)
    {
      $this->Address = $Address;
      return $this;
    }

}
