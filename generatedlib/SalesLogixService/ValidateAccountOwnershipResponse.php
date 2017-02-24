<?php

namespace AvadoLearning\BusinessLogicServices\SalesLogixService;

class ValidateAccountOwnershipResponse
{

    /**
     * @var DirectDebitEntitiesValidateAccountOwnershipResponse $ValidateAccountOwnershipResult
     */
    protected $ValidateAccountOwnershipResult = null;

    /**
     * @param DirectDebitEntitiesValidateAccountOwnershipResponse $ValidateAccountOwnershipResult
     */
    public function __construct($ValidateAccountOwnershipResult)
    {
      $this->ValidateAccountOwnershipResult = $ValidateAccountOwnershipResult;
    }

    /**
     * @return DirectDebitEntitiesValidateAccountOwnershipResponse
     */
    public function getValidateAccountOwnershipResult()
    {
      return $this->ValidateAccountOwnershipResult;
    }

    /**
     * @param DirectDebitEntitiesValidateAccountOwnershipResponse $ValidateAccountOwnershipResult
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\ValidateAccountOwnershipResponse
     */
    public function setValidateAccountOwnershipResult($ValidateAccountOwnershipResult)
    {
      $this->ValidateAccountOwnershipResult = $ValidateAccountOwnershipResult;
      return $this;
    }

}
