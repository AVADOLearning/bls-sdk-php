<?php

namespace AvadoLearning\BusinessLogicServices\SalesLogixService;

class CreateLeadEntitiesCreateLeadRequest extends ServiceRequest
{

    /**
     * @var string $AppendToAccount
     */
    protected $AppendToAccount = null;

    /**
     * @var ArrayOfContact $Contacts
     */
    protected $Contacts = null;

    /**
     * @var ArrayOfstring $CourseInterests
     */
    protected $CourseInterests = null;

    /**
     * @var CreateLeadEntitiesLeadSource $LeadSource
     */
    protected $LeadSource = null;

    /**
     * @var CreateLeadEntitiesQuestions $Questions
     */
    protected $Questions = null;

    /**
     * @var string $Reference
     */
    protected $Reference = null;

    /**
     * @var string $SalesLogixUserId
     */
    protected $SalesLogixUserId = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getAppendToAccount()
    {
      return $this->AppendToAccount;
    }

    /**
     * @param string $AppendToAccount
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\CreateLeadEntities.CreateLeadRequest
     */
    public function setAppendToAccount($AppendToAccount)
    {
      $this->AppendToAccount = $AppendToAccount;
      return $this;
    }

    /**
     * @return ArrayOfContact
     */
    public function getContacts()
    {
      return $this->Contacts;
    }

    /**
     * @param ArrayOfContact $Contacts
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\CreateLeadEntities.CreateLeadRequest
     */
    public function setContacts($Contacts)
    {
      $this->Contacts = $Contacts;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getCourseInterests()
    {
      return $this->CourseInterests;
    }

    /**
     * @param ArrayOfstring $CourseInterests
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\CreateLeadEntities.CreateLeadRequest
     */
    public function setCourseInterests($CourseInterests)
    {
      $this->CourseInterests = $CourseInterests;
      return $this;
    }

    /**
     * @return CreateLeadEntitiesLeadSource
     */
    public function getLeadSource()
    {
      return $this->LeadSource;
    }

    /**
     * @param CreateLeadEntitiesLeadSource $LeadSource
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\CreateLeadEntities.CreateLeadRequest
     */
    public function setLeadSource($LeadSource)
    {
      $this->LeadSource = $LeadSource;
      return $this;
    }

    /**
     * @return CreateLeadEntitiesQuestions
     */
    public function getQuestions()
    {
      return $this->Questions;
    }

    /**
     * @param CreateLeadEntitiesQuestions $Questions
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\CreateLeadEntities.CreateLeadRequest
     */
    public function setQuestions($Questions)
    {
      $this->Questions = $Questions;
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
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\CreateLeadEntities.CreateLeadRequest
     */
    public function setReference($Reference)
    {
      $this->Reference = $Reference;
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
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\CreateLeadEntities.CreateLeadRequest
     */
    public function setSalesLogixUserId($SalesLogixUserId)
    {
      $this->SalesLogixUserId = $SalesLogixUserId;
      return $this;
    }

}
