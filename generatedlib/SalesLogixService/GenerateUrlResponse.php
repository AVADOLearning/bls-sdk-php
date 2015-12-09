<?php

namespace Floream\BusinessLogicServices\SalesLogixService;

class GenerateUrlResponse
{

    /**
     * @var ExamCentreEntitiesExamCentreResponse $GenerateUrlResult
     */
    protected $GenerateUrlResult = null;

    /**
     * @param ExamCentreEntitiesExamCentreResponse $GenerateUrlResult
     */
    public function __construct($GenerateUrlResult)
    {
      $this->GenerateUrlResult = $GenerateUrlResult;
    }

    /**
     * @return ExamCentreEntitiesExamCentreResponse
     */
    public function getGenerateUrlResult()
    {
      return $this->GenerateUrlResult;
    }

    /**
     * @param ExamCentreEntitiesExamCentreResponse $GenerateUrlResult
     * @return \Floream\BusinessLogicServices\SalesLogixService\GenerateUrlResponse
     */
    public function setGenerateUrlResult($GenerateUrlResult)
    {
      $this->GenerateUrlResult = $GenerateUrlResult;
      return $this;
    }

}
