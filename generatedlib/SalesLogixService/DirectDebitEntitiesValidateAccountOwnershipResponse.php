<?php

namespace AvadoLearning\BusinessLogicServices\SalesLogixService;

class DirectDebitEntitiesValidateAccountOwnershipResponse extends ServiceResponse
{

    /**
     * @var string $Address
     */
    protected $Address = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @param ResponseStatus $Status
     */
    public function __construct($Status)
    {
      parent::__construct($Status);
    }

    /**
     * @return string
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param string $Address
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\DirectDebitEntities.ValidateAccountOwnershipResponse
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\DirectDebitEntities.ValidateAccountOwnershipResponse
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

}
