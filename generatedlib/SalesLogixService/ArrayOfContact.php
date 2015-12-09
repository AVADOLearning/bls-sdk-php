<?php

namespace Floream\BusinessLogicServices\SalesLogixService;

class ArrayOfContact
{

    /**
     * @var Contact[] $Contact
     */
    protected $Contact = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Contact[]
     */
    public function getContact()
    {
      return $this->Contact;
    }

    /**
     * @param Contact[] $Contact
     * @return \Floream\BusinessLogicServices\SalesLogixService\ArrayOfContact
     */
    public function setContact(array $Contact)
    {
      $this->Contact = $Contact;
      return $this;
    }

}
