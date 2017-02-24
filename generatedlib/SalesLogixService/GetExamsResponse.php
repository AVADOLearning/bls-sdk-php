<?php

namespace AvadoLearning\BusinessLogicServices\SalesLogixService;

class GetExamsResponse
{

    /**
     * @var ExamEntitiesGetExamsResponse $GetExamsResult
     */
    protected $GetExamsResult = null;

    /**
     * @param ExamEntitiesGetExamsResponse $GetExamsResult
     */
    public function __construct($GetExamsResult)
    {
      $this->GetExamsResult = $GetExamsResult;
    }

    /**
     * @return ExamEntitiesGetExamsResponse
     */
    public function getGetExamsResult()
    {
      return $this->GetExamsResult;
    }

    /**
     * @param ExamEntitiesGetExamsResponse $GetExamsResult
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\GetExamsResponse
     */
    public function setGetExamsResult($GetExamsResult)
    {
      $this->GetExamsResult = $GetExamsResult;
      return $this;
    }

}
