<?php

namespace Floream\BusinessLogicServices\SalesLogixService;

class CreateExamBooking
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
     * @return \Floream\BusinessLogicServices\SalesLogixService\CreateExamBooking
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
