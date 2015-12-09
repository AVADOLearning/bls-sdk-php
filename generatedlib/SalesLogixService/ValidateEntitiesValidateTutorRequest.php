<?php

namespace Floream\BusinessLogicServices\SalesLogixService;

class ValidateEntitiesValidateTutorRequest extends ServiceRequest
{

    /**
     * @var string $ContactId
     */
    protected $ContactId = null;

    /**
     * @var string $Email
     */
    protected $Email = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getContactId()
    {
      return $this->ContactId;
    }

    /**
     * @param string $ContactId
     * @return \Floream\BusinessLogicServices\SalesLogixService\ValidateEntities.ValidateTutorRequest
     */
    public function setContactId($ContactId)
    {
      $this->ContactId = $ContactId;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
      return $this->Email;
    }

    /**
     * @param string $Email
     * @return \Floream\BusinessLogicServices\SalesLogixService\ValidateEntities.ValidateTutorRequest
     */
    public function setEmail($Email)
    {
      $this->Email = $Email;
      return $this;
    }

}
