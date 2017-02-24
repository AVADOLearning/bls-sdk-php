<?php

namespace AvadoLearning\BusinessLogicServices\SalesLogixService;

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
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\ArrayOfContact
     */
    public function setContact(array $Contact)
    {
      $this->Contact = $Contact;
      return $this;
    }

}
