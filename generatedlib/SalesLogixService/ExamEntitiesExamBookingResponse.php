<?php

namespace AvadoLearning\BusinessLogicServices\SalesLogixService;

class ExamEntitiesExamBookingResponse extends ServiceResponse
{

    /**
     * @var ArrayOfstring $BookingIds
     */
    protected $BookingIds = null;

    /**
     * @param ResponseStatus $Status
     */
    public function __construct($Status)
    {
      parent::__construct($Status);
    }

    /**
     * @return ArrayOfstring
     */
    public function getBookingIds()
    {
      return $this->BookingIds;
    }

    /**
     * @param ArrayOfstring $BookingIds
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\ExamEntities.ExamBookingResponse
     */
    public function setBookingIds($BookingIds)
    {
      $this->BookingIds = $BookingIds;
      return $this;
    }

}
