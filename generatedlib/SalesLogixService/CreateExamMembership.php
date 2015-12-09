<?php

namespace Floream\BusinessLogicServices\SalesLogixService;

class CreateExamMembership
{

    /**
     * @var ExamEntitiesCreateExamMembershipRequest $request
     */
    protected $request = null;

    /**
     * @param ExamEntitiesCreateExamMembershipRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return ExamEntitiesCreateExamMembershipRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param ExamEntitiesCreateExamMembershipRequest $request
     * @return \Floream\BusinessLogicServices\SalesLogixService\CreateExamMembership
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
