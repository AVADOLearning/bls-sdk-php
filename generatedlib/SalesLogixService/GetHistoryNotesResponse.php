<?php

namespace Floream\BusinessLogicServices\SalesLogixService;

class GetHistoryNotesResponse
{

    /**
     * @var HistoryEntitiesGetHistoryResponse $GetHistoryNotesResult
     */
    protected $GetHistoryNotesResult = null;

    /**
     * @param HistoryEntitiesGetHistoryResponse $GetHistoryNotesResult
     */
    public function __construct($GetHistoryNotesResult)
    {
      $this->GetHistoryNotesResult = $GetHistoryNotesResult;
    }

    /**
     * @return HistoryEntitiesGetHistoryResponse
     */
    public function getGetHistoryNotesResult()
    {
      return $this->GetHistoryNotesResult;
    }

    /**
     * @param HistoryEntitiesGetHistoryResponse $GetHistoryNotesResult
     * @return \Floream\BusinessLogicServices\SalesLogixService\GetHistoryNotesResponse
     */
    public function setGetHistoryNotesResult($GetHistoryNotesResult)
    {
      $this->GetHistoryNotesResult = $GetHistoryNotesResult;
      return $this;
    }

}
