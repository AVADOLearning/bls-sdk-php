<?php

namespace AvadoLearning\BusinessLogicServices\SalesLogixService;

class KeyValueOfstringstring
{

    /**
     * @var string $Key
     */
    protected $Key = null;

    /**
     * @var string $Value
     */
    protected $Value = null;

    /**
     * @param string $Key
     * @param string $Value
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
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\KeyValueOfstringstring
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
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
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\KeyValueOfstringstring
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
