<?php

namespace AvadoLearning\BusinessLogicServices\SalesLogixService;

class ExamVenueBooking
{

    /**
     * @var DateSpan $TimeSlot
     */
    protected $TimeSlot = null;

    /**
     * @var ExamVenue $Venue
     */
    protected $Venue = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DateSpan
     */
    public function getTimeSlot()
    {
      return $this->TimeSlot;
    }

    /**
     * @param DateSpan $TimeSlot
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\ExamVenueBooking
     */
    public function setTimeSlot($TimeSlot)
    {
      $this->TimeSlot = $TimeSlot;
      return $this;
    }

    /**
     * @return ExamVenue
     */
    public function getVenue()
    {
      return $this->Venue;
    }

    /**
     * @param ExamVenue $Venue
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\ExamVenueBooking
     */
    public function setVenue($Venue)
    {
      $this->Venue = $Venue;
      return $this;
    }

}
