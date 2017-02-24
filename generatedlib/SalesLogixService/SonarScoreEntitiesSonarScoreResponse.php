<?php

namespace AvadoLearning\BusinessLogicServices\SalesLogixService;

class SonarScoreEntitiesSonarScoreResponse extends ServiceResponse
{

    /**
     * @param ResponseStatus $Status
     */
    public function __construct($Status)
    {
      parent::__construct($Status);
    }

}
