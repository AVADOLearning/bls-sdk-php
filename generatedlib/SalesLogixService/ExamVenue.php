<?php

namespace AvadoLearning\BusinessLogicServices\SalesLogixService;

class ExamVenue
{

    /**
     * @var Address $Address
     */
    protected $Address = null;

    /**
     * @var string $Id
     */
    protected $Id = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var ArrayOfExamVenueDate $VenueDates
     */
    protected $VenueDates = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Address
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param Address $Address
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\ExamVenue
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
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
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\ExamVenue
     */
    public function setId($Id)
    {
      $this->Id = $Id;
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
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\ExamVenue
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return ArrayOfExamVenueDate
     */
    public function getVenueDates()
    {
      return $this->VenueDates;
    }

    /**
     * @param ArrayOfExamVenueDate $VenueDates
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\ExamVenue
     */
    public function setVenueDates($VenueDates)
    {
      $this->VenueDates = $VenueDates;
      return $this;
    }

}
