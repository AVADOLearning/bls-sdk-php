<?php

namespace AvadoLearning\BusinessLogicServices\SalesLogixService;

class CreateHistoryNoteResponse
{

    /**
     * @var HistoryEntitiesCreateHistoryResponse $CreateHistoryNoteResult
     */
    protected $CreateHistoryNoteResult = null;

    /**
     * @param HistoryEntitiesCreateHistoryResponse $CreateHistoryNoteResult
     */
    public function __construct($CreateHistoryNoteResult)
    {
      $this->CreateHistoryNoteResult = $CreateHistoryNoteResult;
    }

    /**
     * @return HistoryEntitiesCreateHistoryResponse
     */
    public function getCreateHistoryNoteResult()
    {
      return $this->CreateHistoryNoteResult;
    }

    /**
     * @param HistoryEntitiesCreateHistoryResponse $CreateHistoryNoteResult
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\CreateHistoryNoteResponse
     */
    public function setCreateHistoryNoteResult($CreateHistoryNoteResult)
    {
      $this->CreateHistoryNoteResult = $CreateHistoryNoteResult;
      return $this;
    }

}
