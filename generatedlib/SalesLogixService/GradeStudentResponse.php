<?php

namespace AvadoLearning\BusinessLogicServices\SalesLogixService;

class GradeStudentResponse
{

    /**
     * @var TutorEntitiesGradeStudentResponse $GradeStudentResult
     */
    protected $GradeStudentResult = null;

    /**
     * @param TutorEntitiesGradeStudentResponse $GradeStudentResult
     */
    public function __construct($GradeStudentResult)
    {
      $this->GradeStudentResult = $GradeStudentResult;
    }

    /**
     * @return TutorEntitiesGradeStudentResponse
     */
    public function getGradeStudentResult()
    {
      return $this->GradeStudentResult;
    }

    /**
     * @param TutorEntitiesGradeStudentResponse $GradeStudentResult
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\GradeStudentResponse
     */
    public function setGradeStudentResult($GradeStudentResult)
    {
      $this->GradeStudentResult = $GradeStudentResult;
      return $this;
    }

}
