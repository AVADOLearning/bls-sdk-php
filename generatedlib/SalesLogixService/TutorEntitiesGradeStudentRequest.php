<?php

namespace Floream\BusinessLogicServices\SalesLogixService;

class TutorEntitiesGradeStudentRequest extends ServiceRequest
{

    /**
     * @var string $FinalGrade
     */
    protected $FinalGrade = null;

    /**
     * @var string $OpportunityId
     */
    protected $OpportunityId = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getFinalGrade()
    {
      return $this->FinalGrade;
    }

    /**
     * @param string $FinalGrade
     * @return \Floream\BusinessLogicServices\SalesLogixService\TutorEntities.GradeStudentRequest
     */
    public function setFinalGrade($FinalGrade)
    {
      $this->FinalGrade = $FinalGrade;
      return $this;
    }

    /**
     * @return string
     */
    public function getOpportunityId()
    {
      return $this->OpportunityId;
    }

    /**
     * @param string $OpportunityId
     * @return \Floream\BusinessLogicServices\SalesLogixService\TutorEntities.GradeStudentRequest
     */
    public function setOpportunityId($OpportunityId)
    {
      $this->OpportunityId = $OpportunityId;
      return $this;
    }

}
