<?php

namespace Floream\BusinessLogicServices\SalesLogixService;

class CreateExamBookingResponse
{

    /**
     * @var ExamEntitiesExamBookingResponse $CreateExamBookingResult
     */
    protected $CreateExamBookingResult = null;

    /**
     * @param ExamEntitiesExamBookingResponse $CreateExamBookingResult
     */
    public function __construct($CreateExamBookingResult)
    {
      $this->CreateExamBookingResult = $CreateExamBookingResult;
    }

    /**
     * @return ExamEntitiesExamBookingResponse
     */
    public function getCreateExamBookingResult()
    {
      return $this->CreateExamBookingResult;
    }

    /**
     * @param ExamEntitiesExamBookingResponse $CreateExamBookingResult
     * @return \Floream\BusinessLogicServices\SalesLogixService\CreateExamBookingResponse
     */
    public function setCreateExamBookingResult($CreateExamBookingResult)
    {
      $this->CreateExamBookingResult = $CreateExamBookingResult;
      return $this;
    }

}
