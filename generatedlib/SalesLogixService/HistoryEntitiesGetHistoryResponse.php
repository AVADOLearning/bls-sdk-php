<?php

namespace AvadoLearning\BusinessLogicServices\SalesLogixService;

class HistoryEntitiesGetHistoryResponse extends PagingResponse
{

    /**
     * @var ArrayOfListItem $Categories
     */
    protected $Categories = null;

    /**
     * @var ArrayOfListItem $Descriptions
     */
    protected $Descriptions = null;

    /**
     * @var ArrayOfHistory $History
     */
    protected $History = null;

    /**
     * @param ResponseStatus $Status
     * @param int $TotalRows
     */
    public function __construct($Status, $TotalRows)
    {
      parent::__construct($Status, $TotalRows);
    }

    /**
     * @return ArrayOfListItem
     */
    public function getCategories()
    {
      return $this->Categories;
    }

    /**
     * @param ArrayOfListItem $Categories
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\HistoryEntities.GetHistoryResponse
     */
    public function setCategories($Categories)
    {
      $this->Categories = $Categories;
      return $this;
    }

    /**
     * @return ArrayOfListItem
     */
    public function getDescriptions()
    {
      return $this->Descriptions;
    }

    /**
     * @param ArrayOfListItem $Descriptions
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\HistoryEntities.GetHistoryResponse
     */
    public function setDescriptions($Descriptions)
    {
      $this->Descriptions = $Descriptions;
      return $this;
    }

    /**
     * @return ArrayOfHistory
     */
    public function getHistory()
    {
      return $this->History;
    }

    /**
     * @param ArrayOfHistory $History
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\HistoryEntities.GetHistoryResponse
     */
    public function setHistory($History)
    {
      $this->History = $History;
      return $this;
    }

}
