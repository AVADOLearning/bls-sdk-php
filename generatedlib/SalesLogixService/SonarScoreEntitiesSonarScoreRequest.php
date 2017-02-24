<?php

namespace AvadoLearning\BusinessLogicServices\SalesLogixService;

class SonarScoreEntitiesSonarScoreRequest extends ServiceRequest
{

    /**
     * @var string $ContactId
     */
    protected $ContactId = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getContactId()
    {
      return $this->ContactId;
    }

    /**
     * @param string $ContactId
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\SonarScoreEntities.SonarScoreRequest
     */
    public function setContactId($ContactId)
    {
      $this->ContactId = $ContactId;
      return $this;
    }

}
