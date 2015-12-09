<?php

namespace Floream\BusinessLogicServices\SalesLogixService;

class GetExams
{

    /**
     * @var ExamEntitiesGetExamsRequest $request
     */
    protected $request = null;

    /**
     * @param ExamEntitiesGetExamsRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return ExamEntitiesGetExamsRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param ExamEntitiesGetExamsRequest $request
     * @return \Floream\BusinessLogicServices\SalesLogixService\GetExams
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
