<?php

namespace AvadoLearning\BusinessLogicServices\SalesLogixService;

class ExamEntitiesGetExamsRequest extends ServiceRequest
{

    /**
     * @var string $OpportunityId
     */
    protected $OpportunityId = null;

    /**
     * @var ExamEntitiesStatus $Status
     */
    protected $Status = null;

    /**
     * @param ExamEntitiesStatus $Status
     */
    public function __construct($Status)
    {
      $this->Status = $Status;
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
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\ExamEntities.GetExamsRequest
     */
    public function setOpportunityId($OpportunityId)
    {
      $this->OpportunityId = $OpportunityId;
      return $this;
    }

    /**
     * @return ExamEntitiesStatus
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param ExamEntitiesStatus $Status
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\ExamEntities.GetExamsRequest
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

}
