<?php

namespace Floream\BusinessLogicServices\SalesLogixService;

class DoSonarScoreResponse
{

    /**
     * @var SonarScoreEntitiesSonarScoreResponse $DoSonarScoreResult
     */
    protected $DoSonarScoreResult = null;

    /**
     * @param SonarScoreEntitiesSonarScoreResponse $DoSonarScoreResult
     */
    public function __construct($DoSonarScoreResult)
    {
      $this->DoSonarScoreResult = $DoSonarScoreResult;
    }

    /**
     * @return SonarScoreEntitiesSonarScoreResponse
     */
    public function getDoSonarScoreResult()
    {
      return $this->DoSonarScoreResult;
    }

    /**
     * @param SonarScoreEntitiesSonarScoreResponse $DoSonarScoreResult
     * @return \Floream\BusinessLogicServices\SalesLogixService\DoSonarScoreResponse
     */
    public function setDoSonarScoreResult($DoSonarScoreResult)
    {
      $this->DoSonarScoreResult = $DoSonarScoreResult;
      return $this;
    }

}
