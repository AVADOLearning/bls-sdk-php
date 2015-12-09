<?php

namespace Floream\BusinessLogicServices\SalesLogixService;

class ArrayOfHistory
{

    /**
     * @var History[] $History
     */
    protected $History = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return History[]
     */
    public function getHistory()
    {
      return $this->History;
    }

    /**
     * @param History[] $History
     * @return \Floream\BusinessLogicServices\SalesLogixService\ArrayOfHistory
     */
    public function setHistory(array $History)
    {
      $this->History = $History;
      return $this;
    }

}
