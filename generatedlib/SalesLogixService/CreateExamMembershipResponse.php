<?php

namespace AvadoLearning\BusinessLogicServices\SalesLogixService;

class CreateExamMembershipResponse
{

    /**
     * @var ExamEntitiesCreateExamMembershipResponse $CreateExamMembershipResult
     */
    protected $CreateExamMembershipResult = null;

    /**
     * @param ExamEntitiesCreateExamMembershipResponse $CreateExamMembershipResult
     */
    public function __construct($CreateExamMembershipResult)
    {
      $this->CreateExamMembershipResult = $CreateExamMembershipResult;
    }

    /**
     * @return ExamEntitiesCreateExamMembershipResponse
     */
    public function getCreateExamMembershipResult()
    {
      return $this->CreateExamMembershipResult;
    }

    /**
     * @param ExamEntitiesCreateExamMembershipResponse $CreateExamMembershipResult
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\CreateExamMembershipResponse
     */
    public function setCreateExamMembershipResult($CreateExamMembershipResult)
    {
      $this->CreateExamMembershipResult = $CreateExamMembershipResult;
      return $this;
    }

}
