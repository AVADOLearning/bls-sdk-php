<?php

namespace AvadoLearning\BusinessLogicServices\SalesLogixService;

class ValidateAccountOwnership
{

    /**
     * @var DirectDebitEntitiesValidateAccountOwnershipRequest $request
     */
    protected $request = null;

    /**
     * @param DirectDebitEntitiesValidateAccountOwnershipRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return DirectDebitEntitiesValidateAccountOwnershipRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param DirectDebitEntitiesValidateAccountOwnershipRequest $request
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\ValidateAccountOwnership
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
