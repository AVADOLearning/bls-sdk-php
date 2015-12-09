<?php

namespace Floream\BusinessLogicServices\SalesLogixService;

class Course
{

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var string $College
     */
    protected $College = null;

    /**
     * @var string $Faculty
     */
    protected $Faculty = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Tutor
     */
    protected $Tutor = null;

    /**
     * @var \DateTime $TutorEndDate
     */
    protected $TutorEndDate = null;

    /**
     * @var int $TutorId
     */
    protected $TutorId = null;

    /**
     * @var string $Version
     */
    protected $Version = null;

    /**
     * @var string $VlcVersion
     */
    protected $VlcVersion = null;

    
    public function __construct()
    {
    
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
     * @return \Floream\BusinessLogicServices\SalesLogixService\Course
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return string
     */
    public function getCollege()
    {
      return $this->College;
    }

    /**
     * @param string $College
     * @return \Floream\BusinessLogicServices\SalesLogixService\Course
     */
    public function setCollege($College)
    {
      $this->College = $College;
      return $this;
    }

    /**
     * @return string
     */
    public function getFaculty()
    {
      return $this->Faculty;
    }

    /**
     * @param string $Faculty
     * @return \Floream\BusinessLogicServices\SalesLogixService\Course
     */
    public function setFaculty($Faculty)
    {
      $this->Faculty = $Faculty;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \Floream\BusinessLogicServices\SalesLogixService\Course
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getTutor()
    {
      return $this->Tutor;
    }

    /**
     * @param string $Tutor
     * @return \Floream\BusinessLogicServices\SalesLogixService\Course
     */
    public function setTutor($Tutor)
    {
      $this->Tutor = $Tutor;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTutorEndDate()
    {
      if ($this->TutorEndDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->TutorEndDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $TutorEndDate
     * @return \Floream\BusinessLogicServices\SalesLogixService\Course
     */
    public function setTutorEndDate(\DateTime $TutorEndDate)
    {
      $this->TutorEndDate = $TutorEndDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return int
     */
    public function getTutorId()
    {
      return $this->TutorId;
    }

    /**
     * @param int $TutorId
     * @return \Floream\BusinessLogicServices\SalesLogixService\Course
     */
    public function setTutorId($TutorId)
    {
      $this->TutorId = $TutorId;
      return $this;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
      return $this->Version;
    }

    /**
     * @param string $Version
     * @return \Floream\BusinessLogicServices\SalesLogixService\Course
     */
    public function setVersion($Version)
    {
      $this->Version = $Version;
      return $this;
    }

    /**
     * @return string
     */
    public function getVlcVersion()
    {
      return $this->VlcVersion;
    }

    /**
     * @param string $VlcVersion
     * @return \Floream\BusinessLogicServices\SalesLogixService\Course
     */
    public function setVlcVersion($VlcVersion)
    {
      $this->VlcVersion = $VlcVersion;
      return $this;
    }

}
