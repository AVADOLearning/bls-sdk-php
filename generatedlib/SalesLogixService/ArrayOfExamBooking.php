<?php

namespace Floream\BusinessLogicServices\SalesLogixService;

class ArrayOfExamBooking
{

    /**
     * @var ExamBooking[] $ExamBooking
     */
    protected $ExamBooking = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ExamBooking[]
     */
    public function getExamBooking()
    {
      return $this->ExamBooking;
    }

    /**
     * @param ExamBooking[] $ExamBooking
     * @return \Floream\BusinessLogicServices\SalesLogixService\ArrayOfExamBooking
     */
    public function setExamBooking(array $ExamBooking)
    {
      $this->ExamBooking = $ExamBooking;
      return $this;
    }

}
