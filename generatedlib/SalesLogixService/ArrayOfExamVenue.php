<?php

namespace AvadoLearning\BusinessLogicServices\SalesLogixService;

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
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\ArrayOfExamVenue
     */
    public function setExamVenue(array $ExamVenue)
    {
      $this->ExamVenue = $ExamVenue;
      return $this;
    }

}
