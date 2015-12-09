<?php

namespace Floream\BusinessLogicServices\SalesLogixService;

class ExamEntitiesGetExamsResponse extends ServiceResponse
{

    /**
     * @var ArrayOfExam $Exams
     */
    protected $Exams = null;

    /**
     * @param ResponseStatus $Status
     */
    public function __construct($Status)
    {
      parent::__construct($Status);
    }

    /**
     * @return ArrayOfExam
     */
    public function getExams()
    {
      return $this->Exams;
    }

    /**
     * @param ArrayOfExam $Exams
     * @return \Floream\BusinessLogicServices\SalesLogixService\ExamEntities.GetExamsResponse
     */
    public function setExams($Exams)
    {
      $this->Exams = $Exams;
      return $this;
    }

}
