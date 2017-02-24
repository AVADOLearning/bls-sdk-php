<?php

namespace AvadoLearning\BusinessLogicServices\SalesLogixService;

class ValidateEntitiesValidateTutorResponse extends ServiceResponse
{

    /**
     * @var string $SalesLogixId
     */
    protected $SalesLogixId = null;

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
    public function getSalesLogixId()
    {
      return $this->SalesLogixId;
    }

    /**
     * @param string $SalesLogixId
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\ValidateEntities.ValidateTutorResponse
     */
    public function setSalesLogixId($SalesLogixId)
    {
      $this->SalesLogixId = $SalesLogixId;
      return $this;
    }

}
