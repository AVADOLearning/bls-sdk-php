<?php

namespace Floream\BusinessLogicServices\SalesLogixService;

class Decrypt
{

    /**
     * @var CryptographyEntitiesCryptographyRequest $request
     */
    protected $request = null;

    /**
     * @param CryptographyEntitiesCryptographyRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return CryptographyEntitiesCryptographyRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param CryptographyEntitiesCryptographyRequest $request
     * @return \Floream\BusinessLogicServices\SalesLogixService\Decrypt
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
