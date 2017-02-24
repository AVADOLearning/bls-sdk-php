<?php

namespace AvadoLearning\BusinessLogicServices\SalesLogixService;

class RescheduleExamBooking
{

    /**
     * @var ExamEntitiesExamBookingRequest $request
     */
    protected $request = null;

    /**
     * @param ExamEntitiesExamBookingRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return ExamEntitiesExamBookingRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param ExamEntitiesExamBookingRequest $request
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\RescheduleExamBooking
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
