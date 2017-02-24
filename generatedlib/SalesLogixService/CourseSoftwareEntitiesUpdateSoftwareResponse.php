<?php

namespace AvadoLearning\BusinessLogicServices\SalesLogixService;

class CourseSoftwareEntitiesUpdateSoftwareResponse extends CourseSoftwareEntitiesValidateSoftwareResponse
{

    /**
     * @param ResponseStatus $Status
     */
    public function __construct($Status)
    {
      parent::__construct($Status);
    }

}
