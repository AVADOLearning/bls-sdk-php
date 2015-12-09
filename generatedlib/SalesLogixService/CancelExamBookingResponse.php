<?php

namespace Floream\BusinessLogicServices\SalesLogixService;

class CancelExamBookingResponse
{

    /**
     * @var ExamEntitiesExamBookingResponse $CancelExamBookingResult
     */
    protected $CancelExamBookingResult = null;

    /**
     * @param ExamEntitiesExamBookingResponse $CancelExamBookingResult
     */
    public function __construct($CancelExamBookingResult)
    {
      $this->CancelExamBookingResult = $CancelExamBookingResult;
    }

    /**
     * @return ExamEntitiesExamBookingResponse
     */
    public function getCancelExamBookingResult()
    {
      return $this->CancelExamBookingResult;
    }

    /**
     * @param ExamEntitiesExamBookingResponse $CancelExamBookingResult
     * @return \Floream\BusinessLogicServices\SalesLogixService\CancelExamBookingResponse
     */
    public function setCancelExamBookingResult($CancelExamBookingResult)
    {
      $this->CancelExamBookingResult = $CancelExamBookingResult;
      return $this;
    }

}
