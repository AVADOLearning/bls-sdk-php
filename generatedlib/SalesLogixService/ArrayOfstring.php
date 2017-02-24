<?php

namespace AvadoLearning\BusinessLogicServices\SalesLogixService;

class ArrayOfstring
{

    /**
     * @var string[] $string
     */
    protected $string = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string[]
     */
    public function getString()
    {
      return $this->string;
    }

    /**
     * @param string[] $string
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\ArrayOfstring
     */
    public function setString(array $string)
    {
      $this->string = $string;
      return $this;
    }

}
