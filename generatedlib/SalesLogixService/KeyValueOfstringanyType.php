<?php

namespace AvadoLearning\BusinessLogicServices\SalesLogixService;

class KeyValueOfstringanyType
{

    /**
     * @var string $Key
     */
    protected $Key = null;

    /**
     * @var anyType $Value
     */
    protected $Value = null;

    /**
     * @param string $Key
     * @param anyType $Value
     */
    public function __construct($Key, $Value)
    {
      $this->Key = $Key;
      $this->Value = $Value;
    }

    /**
     * @return string
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param string $Key
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\KeyValueOfstringanyType
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return anyType
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param anyType $Value
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\KeyValueOfstringanyType
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
