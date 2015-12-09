<?php

namespace Floream\BusinessLogicServices\SalesLogixService;

class ArrayOfExamVenue
{

    /**
     * @var ExamVenue[] $ExamVenue
     */
    protected $ExamVenue = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ExamVenue[]
     */
    public function getExamVenue()
    {
      return $this->ExamVenue;
    }

    /**
     * @param ExamVenue[] $ExamVenue
     * @return \Floream\BusinessLogicServices\SalesLogixService\ArrayOfExamVenue
     */
    public function setExamVenue(array $ExamVenue)
    {
      $this->ExamVenue = $ExamVenue;
      return $this;
    }

}
