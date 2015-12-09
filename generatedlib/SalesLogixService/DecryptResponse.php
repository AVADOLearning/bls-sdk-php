<?php

namespace Floream\BusinessLogicServices\SalesLogixService;

class DecryptResponse
{

    /**
     * @var CryptographyEntitiesCryptographyResponse $DecryptResult
     */
    protected $DecryptResult = null;

    /**
     * @param CryptographyEntitiesCryptographyResponse $DecryptResult
     */
    public function __construct($DecryptResult)
    {
      $this->DecryptResult = $DecryptResult;
    }

    /**
     * @return CryptographyEntitiesCryptographyResponse
     */
    public function getDecryptResult()
    {
      return $this->DecryptResult;
    }

    /**
     * @param CryptographyEntitiesCryptographyResponse $DecryptResult
     * @return \Floream\BusinessLogicServices\SalesLogixService\DecryptResponse
     */
    public function setDecryptResult($DecryptResult)
    {
      $this->DecryptResult = $DecryptResult;
      return $this;
    }

}
