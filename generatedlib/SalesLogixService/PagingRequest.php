<?php

namespace AvadoLearning\BusinessLogicServices\SalesLogixService;

class PagingRequest extends ServiceRequest
{

    /**
     * @var int $Page
     */
    protected $Page = null;

    /**
     * @var int $RowsPerPage
     */
    protected $RowsPerPage = null;

    /**
     * @param int $Page
     * @param int $RowsPerPage
     */
    public function __construct($Page, $RowsPerPage)
    {
      $this->Page = $Page;
      $this->RowsPerPage = $RowsPerPage;
    }

    /**
     * @return int
     */
    public function getPage()
    {
      return $this->Page;
    }

    /**
     * @param int $Page
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\PagingRequest
     */
    public function setPage($Page)
    {
      $this->Page = $Page;
      return $this;
    }

    /**
     * @return int
     */
    public function getRowsPerPage()
    {
      return $this->RowsPerPage;
    }

    /**
     * @param int $RowsPerPage
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\PagingRequest
     */
    public function setRowsPerPage($RowsPerPage)
    {
      $this->RowsPerPage = $RowsPerPage;
      return $this;
    }

}
