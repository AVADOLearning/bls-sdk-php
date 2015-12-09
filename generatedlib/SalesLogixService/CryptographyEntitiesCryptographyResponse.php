<?php

namespace Floream\BusinessLogicServices\SalesLogixService;

class CryptographyEntitiesCryptographyResponse extends ServiceResponse
{

    /**
     * @var string $Value
     */
    protected $Value = null;

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
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param string $Value
     * @return \Floream\BusinessLogicServices\SalesLogixService\CryptographyEntities.CryptographyResponse
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
