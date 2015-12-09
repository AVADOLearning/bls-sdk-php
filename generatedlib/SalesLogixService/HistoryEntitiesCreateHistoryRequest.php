<?php

namespace Floream\BusinessLogicServices\SalesLogixService;

class HistoryEntitiesCreateHistoryRequest extends ServiceRequest
{

    /**
     * @var string $EntityId
     */
    protected $EntityId = null;

    /**
     * @var History $History
     */
    protected $History = null;

    /**
     * @var HistoryLevel $Level
     */
    protected $Level = null;

    /**
     * @param HistoryLevel $Level
     */
    public function __construct($Level)
    {
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
     * @return \Floream\BusinessLogicServices\SalesLogixService\HistoryEntities.CreateHistoryRequest
     */
    public function setEntityId($EntityId)
    {
      $this->EntityId = $EntityId;
      return $this;
    }

    /**
     * @return History
     */
    public function getHistory()
    {
      return $this->History;
    }

    /**
     * @param History $History
     * @return \Floream\BusinessLogicServices\SalesLogixService\HistoryEntities.CreateHistoryRequest
     */
    public function setHistory($History)
    {
      $this->History = $History;
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
     * @return \Floream\BusinessLogicServices\SalesLogixService\HistoryEntities.CreateHistoryRequest
     */
    public function setLevel($Level)
    {
      $this->Level = $Level;
      return $this;
    }

}
