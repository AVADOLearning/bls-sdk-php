<?php

namespace Floream\BusinessLogicServices\SalesLogixService;

class CreateLeadEntitiesQuestions
{

    /**
     * @var ArrayOfAdditionalQuestion $AdditionalQuestions
     */
    protected $AdditionalQuestions = null;

    /**
     * @var boolean $ArmedForces
     */
    protected $ArmedForces = null;

    /**
     * @var \DateTime $BestTimeToCall
     */
    protected $BestTimeToCall = null;

    /**
     * @var string $CompanyName
     */
    protected $CompanyName = null;

    /**
     * @var boolean $ComputerAccess
     */
    protected $ComputerAccess = null;

    /**
     * @var string $CurrentRole
     */
    protected $CurrentRole = null;

    /**
     * @var string $EmploymentStatus
     */
    protected $EmploymentStatus = null;

    /**
     * @var \DateTime $EnrolmentExpectation
     */
    protected $EnrolmentExpectation = null;

    /**
     * @var string $HighestQualification
     */
    protected $HighestQualification = null;

    /**
     * @var string $LivingArrangements
     */
    protected $LivingArrangements = null;

    /**
     * @var string $Motivation
     */
    protected $Motivation = null;

    /**
     * @var boolean $OpenDayInterest
     */
    protected $OpenDayInterest = null;

    /**
     * @var string $Origin
     */
    protected $Origin = null;

    /**
     * @var CreateLeadEntitiesPlanToPay $PayForCourse
     */
    protected $PayForCourse = null;

    /**
     * @var boolean $Prison
     */
    protected $Prison = null;

    /**
     * @var string $ReasonToStudy
     */
    protected $ReasonToStudy = null;

    /**
     * @var string $SalaryBand
     */
    protected $SalaryBand = null;

    /**
     * @var boolean $ThirdPartyOptOut
     */
    protected $ThirdPartyOptOut = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfAdditionalQuestion
     */
    public function getAdditionalQuestions()
    {
      return $this->AdditionalQuestions;
    }

    /**
     * @param ArrayOfAdditionalQuestion $AdditionalQuestions
     * @return \Floream\BusinessLogicServices\SalesLogixService\CreateLeadEntities.Questions
     */
    public function setAdditionalQuestions($AdditionalQuestions)
    {
      $this->AdditionalQuestions = $AdditionalQuestions;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getArmedForces()
    {
      return $this->ArmedForces;
    }

    /**
     * @param boolean $ArmedForces
     * @return \Floream\BusinessLogicServices\SalesLogixService\CreateLeadEntities.Questions
     */
    public function setArmedForces($ArmedForces)
    {
      $this->ArmedForces = $ArmedForces;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getBestTimeToCall()
    {
      if ($this->BestTimeToCall == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->BestTimeToCall);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $BestTimeToCall
     * @return \Floream\BusinessLogicServices\SalesLogixService\CreateLeadEntities.Questions
     */
    public function setBestTimeToCall(\DateTime $BestTimeToCall)
    {
      $this->BestTimeToCall = $BestTimeToCall->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getCompanyName()
    {
      return $this->CompanyName;
    }

    /**
     * @param string $CompanyName
     * @return \Floream\BusinessLogicServices\SalesLogixService\CreateLeadEntities.Questions
     */
    public function setCompanyName($CompanyName)
    {
      $this->CompanyName = $CompanyName;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getComputerAccess()
    {
      return $this->ComputerAccess;
    }

    /**
     * @param boolean $ComputerAccess
     * @return \Floream\BusinessLogicServices\SalesLogixService\CreateLeadEntities.Questions
     */
    public function setComputerAccess($ComputerAccess)
    {
      $this->ComputerAccess = $ComputerAccess;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrentRole()
    {
      return $this->CurrentRole;
    }

    /**
     * @param string $CurrentRole
     * @return \Floream\BusinessLogicServices\SalesLogixService\CreateLeadEntities.Questions
     */
    public function setCurrentRole($CurrentRole)
    {
      $this->CurrentRole = $CurrentRole;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmploymentStatus()
    {
      return $this->EmploymentStatus;
    }

    /**
     * @param string $EmploymentStatus
     * @return \Floream\BusinessLogicServices\SalesLogixService\CreateLeadEntities.Questions
     */
    public function setEmploymentStatus($EmploymentStatus)
    {
      $this->EmploymentStatus = $EmploymentStatus;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEnrolmentExpectation()
    {
      if ($this->EnrolmentExpectation == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EnrolmentExpectation);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EnrolmentExpectation
     * @return \Floream\BusinessLogicServices\SalesLogixService\CreateLeadEntities.Questions
     */
    public function setEnrolmentExpectation(\DateTime $EnrolmentExpectation)
    {
      $this->EnrolmentExpectation = $EnrolmentExpectation->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getHighestQualification()
    {
      return $this->HighestQualification;
    }

    /**
     * @param string $HighestQualification
     * @return \Floream\BusinessLogicServices\SalesLogixService\CreateLeadEntities.Questions
     */
    public function setHighestQualification($HighestQualification)
    {
      $this->HighestQualification = $HighestQualification;
      return $this;
    }

    /**
     * @return string
     */
    public function getLivingArrangements()
    {
      return $this->LivingArrangements;
    }

    /**
     * @param string $LivingArrangements
     * @return \Floream\BusinessLogicServices\SalesLogixService\CreateLeadEntities.Questions
     */
    public function setLivingArrangements($LivingArrangements)
    {
      $this->LivingArrangements = $LivingArrangements;
      return $this;
    }

    /**
     * @return string
     */
    public function getMotivation()
    {
      return $this->Motivation;
    }

    /**
     * @param string $Motivation
     * @return \Floream\BusinessLogicServices\SalesLogixService\CreateLeadEntities.Questions
     */
    public function setMotivation($Motivation)
    {
      $this->Motivation = $Motivation;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOpenDayInterest()
    {
      return $this->OpenDayInterest;
    }

    /**
     * @param boolean $OpenDayInterest
     * @return \Floream\BusinessLogicServices\SalesLogixService\CreateLeadEntities.Questions
     */
    public function setOpenDayInterest($OpenDayInterest)
    {
      $this->OpenDayInterest = $OpenDayInterest;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrigin()
    {
      return $this->Origin;
    }

    /**
     * @param string $Origin
     * @return \Floream\BusinessLogicServices\SalesLogixService\CreateLeadEntities.Questions
     */
    public function setOrigin($Origin)
    {
      $this->Origin = $Origin;
      return $this;
    }

    /**
     * @return CreateLeadEntitiesPlanToPay
     */
    public function getPayForCourse()
    {
      return $this->PayForCourse;
    }

    /**
     * @param CreateLeadEntitiesPlanToPay $PayForCourse
     * @return \Floream\BusinessLogicServices\SalesLogixService\CreateLeadEntities.Questions
     */
    public function setPayForCourse($PayForCourse)
    {
      $this->PayForCourse = $PayForCourse;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPrison()
    {
      return $this->Prison;
    }

    /**
     * @param boolean $Prison
     * @return \Floream\BusinessLogicServices\SalesLogixService\CreateLeadEntities.Questions
     */
    public function setPrison($Prison)
    {
      $this->Prison = $Prison;
      return $this;
    }

    /**
     * @return string
     */
    public function getReasonToStudy()
    {
      return $this->ReasonToStudy;
    }

    /**
     * @param string $ReasonToStudy
     * @return \Floream\BusinessLogicServices\SalesLogixService\CreateLeadEntities.Questions
     */
    public function setReasonToStudy($ReasonToStudy)
    {
      $this->ReasonToStudy = $ReasonToStudy;
      return $this;
    }

    /**
     * @return string
     */
    public function getSalaryBand()
    {
      return $this->SalaryBand;
    }

    /**
     * @param string $SalaryBand
     * @return \Floream\BusinessLogicServices\SalesLogixService\CreateLeadEntities.Questions
     */
    public function setSalaryBand($SalaryBand)
    {
      $this->SalaryBand = $SalaryBand;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getThirdPartyOptOut()
    {
      return $this->ThirdPartyOptOut;
    }

    /**
     * @param boolean $ThirdPartyOptOut
     * @return \Floream\BusinessLogicServices\SalesLogixService\CreateLeadEntities.Questions
     */
    public function setThirdPartyOptOut($ThirdPartyOptOut)
    {
      $this->ThirdPartyOptOut = $ThirdPartyOptOut;
      return $this;
    }

}
