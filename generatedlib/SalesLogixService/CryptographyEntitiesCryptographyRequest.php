<?php

namespace Floream\BusinessLogicServices\SalesLogixService;

class CryptographyEntitiesCryptographyRequest extends ServiceRequest
{

    /**
     * @var string $Data
     */
    protected $Data = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getData()
    {
      return $this->Data;
    }

    /**
     * @param string $Data
     * @return \Floream\BusinessLogicServices\SalesLogixService\CryptographyEntities.CryptographyRequest
     */
    public function setData($Data)
    {
      $this->Data = $Data;
      return $this;
    }

}
