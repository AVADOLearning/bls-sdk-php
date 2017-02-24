<?php

namespace AvadoLearning\BusinessLogicServices\SalesLogixService;

class CourseSoftwareEntitiesValidateSoftwareResponse extends ServiceResponse
{

    /**
     * @param ResponseStatus $Status
     */
    public function __construct($Status)
    {
      parent::__construct($Status);
    }

}
