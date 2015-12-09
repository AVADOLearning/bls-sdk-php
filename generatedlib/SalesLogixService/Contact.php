<?php

namespace Floream\BusinessLogicServices\SalesLogixService;

class Contact
{

    /**
     * @var ArrayOfAddress $Addresses
     */
    protected $Addresses = null;

    /**
     * @var boolean $ArmedForces
     */
    protected $ArmedForces = null;

    /**
     * @var string $CompanyName
     */
    protected $CompanyName = null;

    /**
     * @var \DateTime $DateOfBirth
     */
    protected $DateOfBirth = null;

    /**
     * @var boolean $Disability
     */
    protected $Disability = null;

    /**
     * @var string $Email
     */
    protected $Email = null;

    /**
     * @var string $FirstName
     */
    protected $FirstName = null;

    /**
     * @var ContactGender $Gender
     */
    protected $Gender = null;

    /**
     * @var string $HomeTelephone
     */
    protected $HomeTelephone = null;

    /**
     * @var string $HomeTelephonePrefix
     */
    protected $HomeTelephonePrefix = null;

    /**
     * @var string $LastName
     */
    protected $LastName = null;

    /**
     * @var string $MiddleName
     */
    protected $MiddleName = null;

    /**
     * @var string $MobileTelephone
     */
    protected $MobileTelephone = null;

    /**
     * @var string $MobileTelephonePrefix
     */
    protected $MobileTelephonePrefix = null;

    /**
     * @var boolean $Prison
     */
    protected $Prison = null;

    /**
     * @var string $Reference
     */
    protected $Reference = null;

    /**
     * @var boolean $TelephoneValidated
     */
    protected $TelephoneValidated = null;

    /**
     * @var ContactTitle $Title
     */
    protected $Title = null;

    /**
     * @var ContactType $Type
     */
    protected $Type = null;

    /**
     * @var string $WorkTelephone
     */
    protected $WorkTelephone = null;

    /**
     * @var string $WorkTelephonePrefix
     */
    protected $WorkTelephonePrefix = null;

    /**
     * @param boolean $ArmedForces
     * @param boolean $Disability
     * @param ContactGender $Gender
     * @param boolean $Prison
     * @param ContactTitle $Title
     * @param ContactType $Type
     */
    public function __construct($ArmedForces, $Disability, $Gender, $Prison, $Title, $Type)
    {
      $this->ArmedForces = $ArmedForces;
      $this->Disability = $Disability;
      $this->Gender = $Gender;
      $this->Prison = $Prison;
      $this->Title = $Title;
      $this->Type = $Type;
    }

    /**
     * @return ArrayOfAddress
     */
    public function getAddresses()
    {
      return $this->Addresses;
    }

    /**
     * @param ArrayOfAddress $Addresses
     * @return \Floream\BusinessLogicServices\SalesLogixService\Contact
     */
    public function setAddresses($Addresses)
    {
      $this->Addresses = $Addresses;
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
     * @return \Floream\BusinessLogicServices\SalesLogixService\Contact
     */
    public function setArmedForces($ArmedForces)
    {
      $this->ArmedForces = $ArmedForces;
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
     * @return \Floream\BusinessLogicServices\SalesLogixService\Contact
     */
    public function setCompanyName($CompanyName)
    {
      $this->CompanyName = $CompanyName;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateOfBirth()
    {
      if ($this->DateOfBirth == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DateOfBirth);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DateOfBirth
     * @return \Floream\BusinessLogicServices\SalesLogixService\Contact
     */
    public function setDateOfBirth(\DateTime $DateOfBirth)
    {
      $this->DateOfBirth = $DateOfBirth->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDisability()
    {
      return $this->Disability;
    }

    /**
     * @param boolean $Disability
     * @return \Floream\BusinessLogicServices\SalesLogixService\Contact
     */
    public function setDisability($Disability)
    {
      $this->Disability = $Disability;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
      return $this->Email;
    }

    /**
     * @param string $Email
     * @return \Floream\BusinessLogicServices\SalesLogixService\Contact
     */
    public function setEmail($Email)
    {
      $this->Email = $Email;
      return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
      return $this->FirstName;
    }

    /**
     * @param string $FirstName
     * @return \Floream\BusinessLogicServices\SalesLogixService\Contact
     */
    public function setFirstName($FirstName)
    {
      $this->FirstName = $FirstName;
      return $this;
    }

    /**
     * @return ContactGender
     */
    public function getGender()
    {
      return $this->Gender;
    }

    /**
     * @param ContactGender $Gender
     * @return \Floream\BusinessLogicServices\SalesLogixService\Contact
     */
    public function setGender($Gender)
    {
      $this->Gender = $Gender;
      return $this;
    }

    /**
     * @return string
     */
    public function getHomeTelephone()
    {
      return $this->HomeTelephone;
    }

    /**
     * @param string $HomeTelephone
     * @return \Floream\BusinessLogicServices\SalesLogixService\Contact
     */
    public function setHomeTelephone($HomeTelephone)
    {
      $this->HomeTelephone = $HomeTelephone;
      return $this;
    }

    /**
     * @return string
     */
    public function getHomeTelephonePrefix()
    {
      return $this->HomeTelephonePrefix;
    }

    /**
     * @param string $HomeTelephonePrefix
     * @return \Floream\BusinessLogicServices\SalesLogixService\Contact
     */
    public function setHomeTelephonePrefix($HomeTelephonePrefix)
    {
      $this->HomeTelephonePrefix = $HomeTelephonePrefix;
      return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
      return $this->LastName;
    }

    /**
     * @param string $LastName
     * @return \Floream\BusinessLogicServices\SalesLogixService\Contact
     */
    public function setLastName($LastName)
    {
      $this->LastName = $LastName;
      return $this;
    }

    /**
     * @return string
     */
    public function getMiddleName()
    {
      return $this->MiddleName;
    }

    /**
     * @param string $MiddleName
     * @return \Floream\BusinessLogicServices\SalesLogixService\Contact
     */
    public function setMiddleName($MiddleName)
    {
      $this->MiddleName = $MiddleName;
      return $this;
    }

    /**
     * @return string
     */
    public function getMobileTelephone()
    {
      return $this->MobileTelephone;
    }

    /**
     * @param string $MobileTelephone
     * @return \Floream\BusinessLogicServices\SalesLogixService\Contact
     */
    public function setMobileTelephone($MobileTelephone)
    {
      $this->MobileTelephone = $MobileTelephone;
      return $this;
    }

    /**
     * @return string
     */
    public function getMobileTelephonePrefix()
    {
      return $this->MobileTelephonePrefix;
    }

    /**
     * @param string $MobileTelephonePrefix
     * @return \Floream\BusinessLogicServices\SalesLogixService\Contact
     */
    public function setMobileTelephonePrefix($MobileTelephonePrefix)
    {
      $this->MobileTelephonePrefix = $MobileTelephonePrefix;
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
     * @return \Floream\BusinessLogicServices\SalesLogixService\Contact
     */
    public function setPrison($Prison)
    {
      $this->Prison = $Prison;
      return $this;
    }

    /**
     * @return string
     */
    public function getReference()
    {
      return $this->Reference;
    }

    /**
     * @param string $Reference
     * @return \Floream\BusinessLogicServices\SalesLogixService\Contact
     */
    public function setReference($Reference)
    {
      $this->Reference = $Reference;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTelephoneValidated()
    {
      return $this->TelephoneValidated;
    }

    /**
     * @param boolean $TelephoneValidated
     * @return \Floream\BusinessLogicServices\SalesLogixService\Contact
     */
    public function setTelephoneValidated($TelephoneValidated)
    {
      $this->TelephoneValidated = $TelephoneValidated;
      return $this;
    }

    /**
     * @return ContactTitle
     */
    public function getTitle()
    {
      return $this->Title;
    }

    /**
     * @param ContactTitle $Title
     * @return \Floream\BusinessLogicServices\SalesLogixService\Contact
     */
    public function setTitle($Title)
    {
      $this->Title = $Title;
      return $this;
    }

    /**
     * @return ContactType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param ContactType $Type
     * @return \Floream\BusinessLogicServices\SalesLogixService\Contact
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return string
     */
    public function getWorkTelephone()
    {
      return $this->WorkTelephone;
    }

    /**
     * @param string $WorkTelephone
     * @return \Floream\BusinessLogicServices\SalesLogixService\Contact
     */
    public function setWorkTelephone($WorkTelephone)
    {
      $this->WorkTelephone = $WorkTelephone;
      return $this;
    }

    /**
     * @return string
     */
    public function getWorkTelephonePrefix()
    {
      return $this->WorkTelephonePrefix;
    }

    /**
     * @param string $WorkTelephonePrefix
     * @return \Floream\BusinessLogicServices\SalesLogixService\Contact
     */
    public function setWorkTelephonePrefix($WorkTelephonePrefix)
    {
      $this->WorkTelephonePrefix = $WorkTelephonePrefix;
      return $this;
    }

}
