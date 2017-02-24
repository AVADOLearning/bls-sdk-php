<?php

namespace AvadoLearning\BusinessLogicServices\SalesLogixService;

class ExamBooking
{

    /**
     * @var string $ExamCode
     */
    protected $ExamCode = null;

    /**
     * @var string $ExamCourseId
     */
    protected $ExamCourseId = null;

    /**
     * @var string $Id
     */
    protected $Id = null;

    /**
     * @var string $Notes
     */
    protected $Notes = null;

    /**
     * @var float $Price
     */
    protected $Price = null;

    /**
     * @var \DateTime $RequestedDate
     */
    protected $RequestedDate = null;

    /**
     * @var ExamVenue $RequestedVenue
     */
    protected $RequestedVenue = null;

    /**
     * @var boolean $SpecialNeeds
     */
    protected $SpecialNeeds = null;

    /**
     * @var string $Status
     */
    protected $Status = null;

    /**
     * @var ExamType $Type
     */
    protected $Type = null;

    /**
     * @param float $Price
     * @param \DateTime $RequestedDate
     * @param boolean $SpecialNeeds
     * @param ExamType $Type
     */
    public function __construct($Price, \DateTime $RequestedDate, $SpecialNeeds, $Type)
    {
      $this->Price = $Price;
      $this->RequestedDate = $RequestedDate->format(\DateTime::ATOM);
      $this->SpecialNeeds = $SpecialNeeds;
      $this->Type = $Type;
    }

    /**
     * @return string
     */
    public function getExamCode()
    {
      return $this->ExamCode;
    }

    /**
     * @param string $ExamCode
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\ExamBooking
     */
    public function setExamCode($ExamCode)
    {
      $this->ExamCode = $ExamCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getExamCourseId()
    {
      return $this->ExamCourseId;
    }

    /**
     * @param string $ExamCourseId
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\ExamBooking
     */
    public function setExamCourseId($ExamCourseId)
    {
      $this->ExamCourseId = $ExamCourseId;
      return $this;
    }

    /**
     * @return string
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param string $Id
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\ExamBooking
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return string
     */
    public function getNotes()
    {
      return $this->Notes;
    }

    /**
     * @param string $Notes
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\ExamBooking
     */
    public function setNotes($Notes)
    {
      $this->Notes = $Notes;
      return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
      return $this->Price;
    }

    /**
     * @param float $Price
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\ExamBooking
     */
    public function setPrice($Price)
    {
      $this->Price = $Price;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getRequestedDate()
    {
      if ($this->RequestedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->RequestedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $RequestedDate
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\ExamBooking
     */
    public function setRequestedDate(\DateTime $RequestedDate)
    {
      $this->RequestedDate = $RequestedDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return ExamVenue
     */
    public function getRequestedVenue()
    {
      return $this->RequestedVenue;
    }

    /**
     * @param ExamVenue $RequestedVenue
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\ExamBooking
     */
    public function setRequestedVenue($RequestedVenue)
    {
      $this->RequestedVenue = $RequestedVenue;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSpecialNeeds()
    {
      return $this->SpecialNeeds;
    }

    /**
     * @param boolean $SpecialNeeds
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\ExamBooking
     */
    public function setSpecialNeeds($SpecialNeeds)
    {
      $this->SpecialNeeds = $SpecialNeeds;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param string $Status
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\ExamBooking
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return ExamType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param ExamType $Type
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\ExamBooking
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
