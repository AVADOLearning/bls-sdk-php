<?php

namespace Floream\BusinessLogicServices\SalesLogixService;

class GradeStudent
{

    /**
     * @var TutorEntitiesGradeStudentRequest $request
     */
    protected $request = null;

    /**
     * @param TutorEntitiesGradeStudentRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return TutorEntitiesGradeStudentRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param TutorEntitiesGradeStudentRequest $request
     * @return \Floream\BusinessLogicServices\SalesLogixService\GradeStudent
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
