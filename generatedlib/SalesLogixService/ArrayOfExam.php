<?php

namespace AvadoLearning\BusinessLogicServices\SalesLogixService;

class ArrayOfExam
{

    /**
     * @var Exam[] $Exam
     */
    protected $Exam = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Exam[]
     */
    public function getExam()
    {
      return $this->Exam;
    }

    /**
     * @param Exam[] $Exam
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\ArrayOfExam
     */
    public function setExam(array $Exam)
    {
      $this->Exam = $Exam;
      return $this;
    }

}
