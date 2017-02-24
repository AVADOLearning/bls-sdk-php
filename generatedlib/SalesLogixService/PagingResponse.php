<?php

namespace AvadoLearning\BusinessLogicServices\SalesLogixService;

class PagingResponse extends ServiceResponse
{

    /**
     * @var int $TotalRows
     */
    protected $TotalRows = null;

    /**
     * @param ResponseStatus $Status
     * @param int $TotalRows
     */
    public function __construct($Status, $TotalRows)
    {
      parent::__construct($Status);
      $this->TotalRows = $TotalRows;
    }

    /**
     * @return int
     */
    public function getTotalRows()
    {
      return $this->TotalRows;
    }

    /**
     * @param int $TotalRows
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\PagingResponse
     */
    public function setTotalRows($TotalRows)
    {
      $this->TotalRows = $TotalRows;
      return $this;
    }

}
