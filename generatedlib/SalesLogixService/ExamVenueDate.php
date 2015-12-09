<?php

namespace Floream\BusinessLogicServices\SalesLogixService;

class ExamVenueDate
{

    /**
     * @var \DateTime $VenueDate
     */
    protected $VenueDate = null;

    /**
     * @var string $VenueDateFormat
     */
    protected $VenueDateFormat = null;

    /**
     * @param \DateTime $VenueDate
     */
    public function __construct(\DateTime $VenueDate)
    {
      $this->VenueDate = $VenueDate->format(\DateTime::ATOM);
    }

    /**
     * @return \DateTime
     */
    public function getVenueDate()
    {
      if ($this->VenueDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->VenueDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $VenueDate
     * @return \Floream\BusinessLogicServices\SalesLogixService\ExamVenueDate
     */
    public function setVenueDate(\DateTime $VenueDate)
    {
      $this->VenueDate = $VenueDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getVenueDateFormat()
    {
      return $this->VenueDateFormat;
    }

    /**
     * @param string $VenueDateFormat
     * @return \Floream\BusinessLogicServices\SalesLogixService\ExamVenueDate
     */
    public function setVenueDateFormat($VenueDateFormat)
    {
      $this->VenueDateFormat = $VenueDateFormat;
      return $this;
    }

}
