<?php

namespace Floream\BusinessLogicServices\SalesLogixService;

class RescheduleExamBookingResponse
{

    /**
     * @var ExamEntitiesExamBookingResponse $RescheduleExamBookingResult
     */
    protected $RescheduleExamBookingResult = null;

    /**
     * @param ExamEntitiesExamBookingResponse $RescheduleExamBookingResult
     */
    public function __construct($RescheduleExamBookingResult)
    {
      $this->RescheduleExamBookingResult = $RescheduleExamBookingResult;
    }

    /**
     * @return ExamEntitiesExamBookingResponse
     */
    public function getRescheduleExamBookingResult()
    {
      return $this->RescheduleExamBookingResult;
    }

    /**
     * @param ExamEntitiesExamBookingResponse $RescheduleExamBookingResult
     * @return \Floream\BusinessLogicServices\SalesLogixService\RescheduleExamBookingResponse
     */
    public function setRescheduleExamBookingResult($RescheduleExamBookingResult)
    {
      $this->RescheduleExamBookingResult = $RescheduleExamBookingResult;
      return $this;
    }

}
