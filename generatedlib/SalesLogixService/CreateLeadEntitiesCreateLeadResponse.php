<?php

namespace Floream\BusinessLogicServices\SalesLogixService;

class CreateLeadEntitiesCreateLeadResponse extends ServiceResponse
{

    /**
     * @var CreateLeadEntitiesIdentity $Account
     */
    protected $Account = null;

    /**
     * @var ArrayOfCreateLeadEntitiesIdentity $Contacts
     */
    protected $Contacts = null;

    /**
     * @param ResponseStatus $Status
     */
    public function __construct($Status)
    {
      parent::__construct($Status);
    }

    /**
     * @return CreateLeadEntitiesIdentity
     */
    public function getAccount()
    {
      return $this->Account;
    }

    /**
     * @param CreateLeadEntitiesIdentity $Account
     * @return \Floream\BusinessLogicServices\SalesLogixService\CreateLeadEntities.CreateLeadResponse
     */
    public function setAccount($Account)
    {
      $this->Account = $Account;
      return $this;
    }

    /**
     * @return ArrayOfCreateLeadEntitiesIdentity
     */
    public function getContacts()
    {
      return $this->Contacts;
    }

    /**
     * @param ArrayOfCreateLeadEntitiesIdentity $Contacts
     * @return \Floream\BusinessLogicServices\SalesLogixService\CreateLeadEntities.CreateLeadResponse
     */
    public function setContacts($Contacts)
    {
      $this->Contacts = $Contacts;
      return $this;
    }

}
