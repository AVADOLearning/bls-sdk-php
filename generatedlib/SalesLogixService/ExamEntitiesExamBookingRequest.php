<?php

namespace Floream\BusinessLogicServices\SalesLogixService;

class ExamEntitiesExamBookingRequest extends ServiceRequest
{

    /**
     * @var ArrayOfExamBooking $Bookings
     */
    protected $Bookings = null;

    /**
     * @var string $OpportunityId
     */
    protected $OpportunityId = null;

    /**
     * @var string $SalesLogixUserId
     */
    protected $SalesLogixUserId = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfExamBooking
     */
    public function getBookings()
    {
      return $this->Bookings;
    }

    /**
     * @param ArrayOfExamBooking $Bookings
     * @return \Floream\BusinessLogicServices\SalesLogixService\ExamEntities.ExamBookingRequest
     */
    public function setBookings($Bookings)
    {
      $this->Bookings = $Bookings;
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
     * @return \Floream\BusinessLogicServices\SalesLogixService\ExamEntities.ExamBookingRequest
     */
    public function setOpportunityId($OpportunityId)
    {
      $this->OpportunityId = $OpportunityId;
      return $this;
    }

    /**
     * @return string
     */
    public function getSalesLogixUserId()
    {
      return $this->SalesLogixUserId;
    }

    /**
     * @param string $SalesLogixUserId
     * @return \Floream\BusinessLogicServices\SalesLogixService\ExamEntities.ExamBookingRequest
     */
    public function setSalesLogixUserId($SalesLogixUserId)
    {
      $this->SalesLogixUserId = $SalesLogixUserId;
      return $this;
    }

}
