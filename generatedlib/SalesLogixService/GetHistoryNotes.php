<?php

namespace AvadoLearning\BusinessLogicServices\SalesLogixService;

class GetHistoryNotes
{

    /**
     * @var HistoryEntitiesGetHistoryRequest $request
     */
    protected $request = null;

    /**
     * @param HistoryEntitiesGetHistoryRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return HistoryEntitiesGetHistoryRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param HistoryEntitiesGetHistoryRequest $request
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\GetHistoryNotes
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
