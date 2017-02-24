<?php

namespace AvadoLearning\BusinessLogicServices\SalesLogixService;

class CardDate
{

    /**
     * @var string $Month
     */
    protected $Month = null;

    /**
     * @var string $Year
     */
    protected $Year = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getMonth()
    {
      return $this->Month;
    }

    /**
     * @param string $Month
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\CardDate
     */
    public function setMonth($Month)
    {
      $this->Month = $Month;
      return $this;
    }

    /**
     * @return string
     */
    public function getYear()
    {
      return $this->Year;
    }

    /**
     * @param string $Year
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\CardDate
     */
    public function setYear($Year)
    {
      $this->Year = $Year;
      return $this;
    }

}
