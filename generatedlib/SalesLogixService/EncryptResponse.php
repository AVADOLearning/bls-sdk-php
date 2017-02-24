<?php

namespace AvadoLearning\BusinessLogicServices\SalesLogixService;

class EncryptResponse
{

    /**
     * @var CryptographyEntitiesCryptographyResponse $EncryptResult
     */
    protected $EncryptResult = null;

    /**
     * @param CryptographyEntitiesCryptographyResponse $EncryptResult
     */
    public function __construct($EncryptResult)
    {
      $this->EncryptResult = $EncryptResult;
    }

    /**
     * @return CryptographyEntitiesCryptographyResponse
     */
    public function getEncryptResult()
    {
      return $this->EncryptResult;
    }

    /**
     * @param CryptographyEntitiesCryptographyResponse $EncryptResult
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\EncryptResponse
     */
    public function setEncryptResult($EncryptResult)
    {
      $this->EncryptResult = $EncryptResult;
      return $this;
    }

}
