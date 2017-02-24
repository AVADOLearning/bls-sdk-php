<?php

namespace AvadoLearning\BusinessLogicServices\SalesLogixService;

class ArrayOfKeyValueOfstringstring
{

    /**
     * @var KeyValueOfstringstring[] $KeyValueOfstringstring
     */
    protected $KeyValueOfstringstring = null;

    /**
     * @param KeyValueOfstringstring[] $KeyValueOfstringstring
     */
    public function __construct(array $KeyValueOfstringstring)
    {
      $this->KeyValueOfstringstring = $KeyValueOfstringstring;
    }

    /**
     * @return KeyValueOfstringstring[]
     */
    public function getKeyValueOfstringstring()
    {
      return $this->KeyValueOfstringstring;
    }

    /**
     * @param KeyValueOfstringstring[] $KeyValueOfstringstring
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\ArrayOfKeyValueOfstringstring
     */
    public function setKeyValueOfstringstring(array $KeyValueOfstringstring)
    {
      $this->KeyValueOfstringstring = $KeyValueOfstringstring;
      return $this;
    }

}
