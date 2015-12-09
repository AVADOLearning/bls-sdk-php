<?php

namespace Floream\BusinessLogicServices\SalesLogixService;

class ValidateEntitiesValidateStudentResponse extends ServiceResponse
{

    /**
     * @var Contact $Contact
     */
    protected $Contact = null;

    /**
     * @var Course $Course
     */
    protected $Course = null;

    /**
     * @var Grade $Grade
     */
    protected $Grade = null;

    /**
     * @var AccessRights $HasAccessTo
     */
    protected $HasAccessTo = null;

    /**
     * @var ExamMembership $Membership
     */
    protected $Membership = null;

    /**
     * @var Opportunity $Opportunity
     */
    protected $Opportunity = null;

    /**
     * @var ArrayOfProduct $Products
     */
    protected $Products = null;

    /**
     * @param ResponseStatus $Status
     */
    public function __construct($Status)
    {
      parent::__construct($Status);
    }

    /**
     * @return Contact
     */
    public function getContact()
    {
      return $this->Contact;
    }

    /**
     * @param Contact $Contact
     * @return \Floream\BusinessLogicServices\SalesLogixService\ValidateEntities.ValidateStudentResponse
     */
    public function setContact($Contact)
    {
      $this->Contact = $Contact;
      return $this;
    }

    /**
     * @return Course
     */
    public function getCourse()
    {
      return $this->Course;
    }

    /**
     * @param Course $Course
     * @return \Floream\BusinessLogicServices\SalesLogixService\ValidateEntities.ValidateStudentResponse
     */
    public function setCourse($Course)
    {
      $this->Course = $Course;
      return $this;
    }

    /**
     * @return Grade
     */
    public function getGrade()
    {
      return $this->Grade;
    }

    /**
     * @param Grade $Grade
     * @return \Floream\BusinessLogicServices\SalesLogixService\ValidateEntities.ValidateStudentResponse
     */
    public function setGrade($Grade)
    {
      $this->Grade = $Grade;
      return $this;
    }

    /**
     * @return AccessRights
     */
    public function getHasAccessTo()
    {
      return $this->HasAccessTo;
    }

    /**
     * @param AccessRights $HasAccessTo
     * @return \Floream\BusinessLogicServices\SalesLogixService\ValidateEntities.ValidateStudentResponse
     */
    public function setHasAccessTo($HasAccessTo)
    {
      $this->HasAccessTo = $HasAccessTo;
      return $this;
    }

    /**
     * @return ExamMembership
     */
    public function getMembership()
    {
      return $this->Membership;
    }

    /**
     * @param ExamMembership $Membership
     * @return \Floream\BusinessLogicServices\SalesLogixService\ValidateEntities.ValidateStudentResponse
     */
    public function setMembership($Membership)
    {
      $this->Membership = $Membership;
      return $this;
    }

    /**
     * @return Opportunity
     */
    public function getOpportunity()
    {
      return $this->Opportunity;
    }

    /**
     * @param Opportunity $Opportunity
     * @return \Floream\BusinessLogicServices\SalesLogixService\ValidateEntities.ValidateStudentResponse
     */
    public function setOpportunity($Opportunity)
    {
      $this->Opportunity = $Opportunity;
      return $this;
    }

    /**
     * @return ArrayOfProduct
     */
    public function getProducts()
    {
      return $this->Products;
    }

    /**
     * @param ArrayOfProduct $Products
     * @return \Floream\BusinessLogicServices\SalesLogixService\ValidateEntities.ValidateStudentResponse
     */
    public function setProducts($Products)
    {
      $this->Products = $Products;
      return $this;
    }

}
