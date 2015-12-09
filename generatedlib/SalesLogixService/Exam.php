<?php

namespace Floream\BusinessLogicServices\SalesLogixService;

class Exam
{

    /**
     * @var ArrayOfExamVenue $AvailableVenues
     */
    protected $AvailableVenues = null;

    /**
     * @var string $BookingId
     */
    protected $BookingId = null;

    /**
     * @var string $BookingStatus
     */
    protected $BookingStatus = null;

    /**
     * @var boolean $CanBeCancelled
     */
    protected $CanBeCancelled = null;

    /**
     * @var boolean $CanBeRescheduled
     */
    protected $CanBeRescheduled = null;

    /**
     * @var string $CentrePassword
     */
    protected $CentrePassword = null;

    /**
     * @var string $CentreUserName
     */
    protected $CentreUserName = null;

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var \DateTime $ConfirmedDate
     */
    protected $ConfirmedDate = null;

    /**
     * @var ExamVenueBooking $ConfirmedVenue
     */
    protected $ConfirmedVenue = null;

    /**
     * @var string $CourseVersionId
     */
    protected $CourseVersionId = null;

    /**
     * @var string $CreatedBy
     */
    protected $CreatedBy = null;

    /**
     * @var \DateTime $CreatedDate
     */
    protected $CreatedDate = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var int $Duration
     */
    protected $Duration = null;

    /**
     * @var string $ExamCourseId
     */
    protected $ExamCourseId = null;

    /**
     * @var string $Id
     */
    protected $Id = null;

    /**
     * @var boolean $JoiningInstructionsSent
     */
    protected $JoiningInstructionsSent = null;

    /**
     * @var \DateTime $JoiningInstructionsSentDate
     */
    protected $JoiningInstructionsSentDate = null;

    /**
     * @var string $LongNotes
     */
    protected $LongNotes = null;

    /**
     * @var string $ModifiedBy
     */
    protected $ModifiedBy = null;

    /**
     * @var \DateTime $ModifiedDate
     */
    protected $ModifiedDate = null;

    /**
     * @var string $Notes
     */
    protected $Notes = null;

    /**
     * @var boolean $Paid
     */
    protected $Paid = null;

    /**
     * @var boolean $PaymentRequired
     */
    protected $PaymentRequired = null;

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
     * @var string $Result
     */
    protected $Result = null;

    /**
     * @var boolean $SpecialNeeds
     */
    protected $SpecialNeeds = null;

    /**
     * @var ExamType $Type
     */
    protected $Type = null;

    /**
     * @param boolean $CanBeCancelled
     * @param boolean $CanBeRescheduled
     * @param int $Duration
     * @param boolean $JoiningInstructionsSent
     * @param boolean $Paid
     * @param boolean $PaymentRequired
     * @param float $Price
     * @param \DateTime $RequestedDate
     * @param boolean $SpecialNeeds
     * @param ExamType $Type
     */
    public function __construct($CanBeCancelled, $CanBeRescheduled, $Duration, $JoiningInstructionsSent, $Paid, $PaymentRequired, $Price, \DateTime $RequestedDate, $SpecialNeeds, $Type)
    {
      $this->CanBeCancelled = $CanBeCancelled;
      $this->CanBeRescheduled = $CanBeRescheduled;
      $this->Duration = $Duration;
      $this->JoiningInstructionsSent = $JoiningInstructionsSent;
      $this->Paid = $Paid;
      $this->PaymentRequired = $PaymentRequired;
      $this->Price = $Price;
      $this->RequestedDate = $RequestedDate->format(\DateTime::ATOM);
      $this->SpecialNeeds = $SpecialNeeds;
      $this->Type = $Type;
    }

    /**
     * @return ArrayOfExamVenue
     */
    public function getAvailableVenues()
    {
      return $this->AvailableVenues;
    }

    /**
     * @param ArrayOfExamVenue $AvailableVenues
     * @return \Floream\BusinessLogicServices\SalesLogixService\Exam
     */
    public function setAvailableVenues($AvailableVenues)
    {
      $this->AvailableVenues = $AvailableVenues;
      return $this;
    }

    /**
     * @return string
     */
    public function getBookingId()
    {
      return $this->BookingId;
    }

    /**
     * @param string $BookingId
     * @return \Floream\BusinessLogicServices\SalesLogixService\Exam
     */
    public function setBookingId($BookingId)
    {
      $this->BookingId = $BookingId;
      return $this;
    }

    /**
     * @return string
     */
    public function getBookingStatus()
    {
      return $this->BookingStatus;
    }

    /**
     * @param string $BookingStatus
     * @return \Floream\BusinessLogicServices\SalesLogixService\Exam
     */
    public function setBookingStatus($BookingStatus)
    {
      $this->BookingStatus = $BookingStatus;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCanBeCancelled()
    {
      return $this->CanBeCancelled;
    }

    /**
     * @param boolean $CanBeCancelled
     * @return \Floream\BusinessLogicServices\SalesLogixService\Exam
     */
    public function setCanBeCancelled($CanBeCancelled)
    {
      $this->CanBeCancelled = $CanBeCancelled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCanBeRescheduled()
    {
      return $this->CanBeRescheduled;
    }

    /**
     * @param boolean $CanBeRescheduled
     * @return \Floream\BusinessLogicServices\SalesLogixService\Exam
     */
    public function setCanBeRescheduled($CanBeRescheduled)
    {
      $this->CanBeRescheduled = $CanBeRescheduled;
      return $this;
    }

    /**
     * @return string
     */
    public function getCentrePassword()
    {
      return $this->CentrePassword;
    }

    /**
     * @param string $CentrePassword
     * @return \Floream\BusinessLogicServices\SalesLogixService\Exam
     */
    public function setCentrePassword($CentrePassword)
    {
      $this->CentrePassword = $CentrePassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getCentreUserName()
    {
      return $this->CentreUserName;
    }

    /**
     * @param string $CentreUserName
     * @return \Floream\BusinessLogicServices\SalesLogixService\Exam
     */
    public function setCentreUserName($CentreUserName)
    {
      $this->CentreUserName = $CentreUserName;
      return $this;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param string $Code
     * @return \Floream\BusinessLogicServices\SalesLogixService\Exam
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getConfirmedDate()
    {
      if ($this->ConfirmedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ConfirmedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ConfirmedDate
     * @return \Floream\BusinessLogicServices\SalesLogixService\Exam
     */
    public function setConfirmedDate(\DateTime $ConfirmedDate)
    {
      $this->ConfirmedDate = $ConfirmedDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return ExamVenueBooking
     */
    public function getConfirmedVenue()
    {
      return $this->ConfirmedVenue;
    }

    /**
     * @param ExamVenueBooking $ConfirmedVenue
     * @return \Floream\BusinessLogicServices\SalesLogixService\Exam
     */
    public function setConfirmedVenue($ConfirmedVenue)
    {
      $this->ConfirmedVenue = $ConfirmedVenue;
      return $this;
    }

    /**
     * @return string
     */
    public function getCourseVersionId()
    {
      return $this->CourseVersionId;
    }

    /**
     * @param string $CourseVersionId
     * @return \Floream\BusinessLogicServices\SalesLogixService\Exam
     */
    public function setCourseVersionId($CourseVersionId)
    {
      $this->CourseVersionId = $CourseVersionId;
      return $this;
    }

    /**
     * @return string
     */
    public function getCreatedBy()
    {
      return $this->CreatedBy;
    }

    /**
     * @param string $CreatedBy
     * @return \Floream\BusinessLogicServices\SalesLogixService\Exam
     */
    public function setCreatedBy($CreatedBy)
    {
      $this->CreatedBy = $CreatedBy;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedDate()
    {
      if ($this->CreatedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CreatedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CreatedDate
     * @return \Floream\BusinessLogicServices\SalesLogixService\Exam
     */
    public function setCreatedDate(\DateTime $CreatedDate)
    {
      $this->CreatedDate = $CreatedDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \Floream\BusinessLogicServices\SalesLogixService\Exam
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return int
     */
    public function getDuration()
    {
      return $this->Duration;
    }

    /**
     * @param int $Duration
     * @return \Floream\BusinessLogicServices\SalesLogixService\Exam
     */
    public function setDuration($Duration)
    {
      $this->Duration = $Duration;
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
     * @return \Floream\BusinessLogicServices\SalesLogixService\Exam
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
     * @return \Floream\BusinessLogicServices\SalesLogixService\Exam
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getJoiningInstructionsSent()
    {
      return $this->JoiningInstructionsSent;
    }

    /**
     * @param boolean $JoiningInstructionsSent
     * @return \Floream\BusinessLogicServices\SalesLogixService\Exam
     */
    public function setJoiningInstructionsSent($JoiningInstructionsSent)
    {
      $this->JoiningInstructionsSent = $JoiningInstructionsSent;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getJoiningInstructionsSentDate()
    {
      if ($this->JoiningInstructionsSentDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->JoiningInstructionsSentDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $JoiningInstructionsSentDate
     * @return \Floream\BusinessLogicServices\SalesLogixService\Exam
     */
    public function setJoiningInstructionsSentDate(\DateTime $JoiningInstructionsSentDate)
    {
      $this->JoiningInstructionsSentDate = $JoiningInstructionsSentDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getLongNotes()
    {
      return $this->LongNotes;
    }

    /**
     * @param string $LongNotes
     * @return \Floream\BusinessLogicServices\SalesLogixService\Exam
     */
    public function setLongNotes($LongNotes)
    {
      $this->LongNotes = $LongNotes;
      return $this;
    }

    /**
     * @return string
     */
    public function getModifiedBy()
    {
      return $this->ModifiedBy;
    }

    /**
     * @param string $ModifiedBy
     * @return \Floream\BusinessLogicServices\SalesLogixService\Exam
     */
    public function setModifiedBy($ModifiedBy)
    {
      $this->ModifiedBy = $ModifiedBy;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getModifiedDate()
    {
      if ($this->ModifiedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ModifiedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ModifiedDate
     * @return \Floream\BusinessLogicServices\SalesLogixService\Exam
     */
    public function setModifiedDate(\DateTime $ModifiedDate)
    {
      $this->ModifiedDate = $ModifiedDate->format(\DateTime::ATOM);
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
     * @return \Floream\BusinessLogicServices\SalesLogixService\Exam
     */
    public function setNotes($Notes)
    {
      $this->Notes = $Notes;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPaid()
    {
      return $this->Paid;
    }

    /**
     * @param boolean $Paid
     * @return \Floream\BusinessLogicServices\SalesLogixService\Exam
     */
    public function setPaid($Paid)
    {
      $this->Paid = $Paid;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPaymentRequired()
    {
      return $this->PaymentRequired;
    }

    /**
     * @param boolean $PaymentRequired
     * @return \Floream\BusinessLogicServices\SalesLogixService\Exam
     */
    public function setPaymentRequired($PaymentRequired)
    {
      $this->PaymentRequired = $PaymentRequired;
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
     * @return \Floream\BusinessLogicServices\SalesLogixService\Exam
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
     * @return \Floream\BusinessLogicServices\SalesLogixService\Exam
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
     * @return \Floream\BusinessLogicServices\SalesLogixService\Exam
     */
    public function setRequestedVenue($RequestedVenue)
    {
      $this->RequestedVenue = $RequestedVenue;
      return $this;
    }

    /**
     * @return string
     */
    public function getResult()
    {
      return $this->Result;
    }

    /**
     * @param string $Result
     * @return \Floream\BusinessLogicServices\SalesLogixService\Exam
     */
    public function setResult($Result)
    {
      $this->Result = $Result;
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
     * @return \Floream\BusinessLogicServices\SalesLogixService\Exam
     */
    public function setSpecialNeeds($SpecialNeeds)
    {
      $this->SpecialNeeds = $SpecialNeeds;
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
     * @return \Floream\BusinessLogicServices\SalesLogixService\Exam
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
