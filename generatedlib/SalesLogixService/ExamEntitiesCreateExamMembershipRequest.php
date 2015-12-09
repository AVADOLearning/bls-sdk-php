<?php

namespace Floream\BusinessLogicServices\SalesLogixService;

class ExamEntitiesCreateExamMembershipRequest extends ServiceRequest
{

    /**
     * @var ExamMembership $Membership
     */
    protected $Membership = null;

    /**
     * @var string $OpportunityId
     */
    protected $OpportunityId = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ExamMembership
     */
    public function getMembership()
    {
      return $this->Membership;
    }

    /**
     * @param ExamMembership $Membership
     * @return \Floream\BusinessLogicServices\SalesLogixService\ExamEntities.CreateExamMembershipRequest
     */
    public function setMembership($Membership)
    {
      $this->Membership = $Membership;
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
     * @return \Floream\BusinessLogicServices\SalesLogixService\ExamEntities.CreateExamMembershipRequest
     */
    public function setOpportunityId($OpportunityId)
    {
      $this->OpportunityId = $OpportunityId;
      return $this;
    }

}
