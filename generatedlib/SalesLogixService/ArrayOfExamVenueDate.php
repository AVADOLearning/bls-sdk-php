<?php

namespace Floream\BusinessLogicServices\SalesLogixService;

class ArrayOfExamVenueDate
{

    /**
     * @var ExamVenueDate[] $ExamVenueDate
     */
    protected $ExamVenueDate = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ExamVenueDate[]
     */
    public function getExamVenueDate()
    {
      return $this->ExamVenueDate;
    }

    /**
     * @param ExamVenueDate[] $ExamVenueDate
     * @return \Floream\BusinessLogicServices\SalesLogixService\ArrayOfExamVenueDate
     */
    public function setExamVenueDate(array $ExamVenueDate)
    {
      $this->ExamVenueDate = $ExamVenueDate;
      return $this;
    }

}
