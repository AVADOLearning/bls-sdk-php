<?php

namespace Floream\BusinessLogicServices\SalesLogixService;

class HistoryEntitiesGetHistoryRequest extends PagingRequest
{

    /**
     * @var string $EntityId
     */
    protected $EntityId = null;

    /**
     * @var HistoryLevel $Level
     */
    protected $Level = null;

    /**
     * @param int $Page
     * @param int $RowsPerPage
     * @param HistoryLevel $Level
     */
    public function __construct($Page, $RowsPerPage, $Level)
    {
      parent::__construct($Page, $RowsPerPage);
      $this->Level = $Level;
    }

    /**
     * @return string
     */
    public function getEntityId()
    {
      return $this->EntityId;
    }

    /**
     * @param string $EntityId
     * @return \Floream\BusinessLogicServices\SalesLogixService\HistoryEntities.GetHistoryRequest
     */
    public function setEntityId($EntityId)
    {
      $this->EntityId = $EntityId;
      return $this;
    }

    /**
     * @return HistoryLevel
     */
    public function getLevel()
    {
      return $this->Level;
    }

    /**
     * @param HistoryLevel $Level
     * @return \Floream\BusinessLogicServices\SalesLogixService\HistoryEntities.GetHistoryRequest
     */
    public function setLevel($Level)
    {
      $this->Level = $Level;
      return $this;
    }

}
