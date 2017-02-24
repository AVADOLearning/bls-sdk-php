<?php

namespace AvadoLearning\BusinessLogicServices\SalesLogixService;

class CreateHistoryNote
{

    /**
     * @var HistoryEntitiesCreateHistoryRequest $request
     */
    protected $request = null;

    /**
     * @param HistoryEntitiesCreateHistoryRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return HistoryEntitiesCreateHistoryRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param HistoryEntitiesCreateHistoryRequest $request
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\CreateHistoryNote
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
