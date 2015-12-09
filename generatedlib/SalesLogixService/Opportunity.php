<?php

namespace Floream\BusinessLogicServices\SalesLogixService;

class Opportunity
{

    /**
     * @var AwardingBody $AwardingBody
     */
    protected $AwardingBody = null;

    /**
     * @var Communication $Communication
     */
    protected $Communication = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var \DateTime $EnrolmentDate
     */
    protected $EnrolmentDate = null;

    /**
     * @var string $EnrolmentNumber
     */
    protected $EnrolmentNumber = null;

    /**
     * @var string $OpportunityId
     */
    protected $OpportunityId = null;

    /**
     * @var WelcomeCall $WelcomeCall
     */
    protected $WelcomeCall = null;

    /**
     * @param AwardingBody $AwardingBody
     */
    public function __construct($AwardingBody)
    {
      $this->AwardingBody = $AwardingBody;
    }

    /**
     * @return AwardingBody
     */
    public function getAwardingBody()
    {
      return $this->AwardingBody;
    }

    /**
     * @param AwardingBody $AwardingBody
     * @return \Floream\BusinessLogicServices\SalesLogixService\Opportunity
     */
    public function setAwardingBody($AwardingBody)
    {
      $this->AwardingBody = $AwardingBody;
      return $this;
    }

    /**
     * @return Communication
     */
    public function getCommunication()
    {
      return $this->Communication;
    }

    /**
     * @param Communication $Communication
     * @return \Floream\BusinessLogicServices\SalesLogixService\Opportunity
     */
    public function setCommunication($Communication)
    {
      $this->Communication = $Communication;
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
     * @return \Floream\BusinessLogicServices\SalesLogixService\Opportunity
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEnrolmentDate()
    {
      if ($this->EnrolmentDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EnrolmentDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EnrolmentDate
     * @return \Floream\BusinessLogicServices\SalesLogixService\Opportunity
     */
    public function setEnrolmentDate(\DateTime $EnrolmentDate)
    {
      $this->EnrolmentDate = $EnrolmentDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getEnrolmentNumber()
    {
      return $this->EnrolmentNumber;
    }

    /**
     * @param string $EnrolmentNumber
     * @return \Floream\BusinessLogicServices\SalesLogixService\Opportunity
     */
    public function setEnrolmentNumber($EnrolmentNumber)
    {
      $this->EnrolmentNumber = $EnrolmentNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getOpportunityId()
    {
      return $this->OpportunityId;
    }

    /**
     * @param string $OpportunityId
     * @return \Floream\BusinessLogicServices\SalesLogixService\Opportunity
     */
    public function setOpportunityId($OpportunityId)
    {
      $this->OpportunityId = $OpportunityId;
      return $this;
    }

    /**
     * @return WelcomeCall
     */
    public function getWelcomeCall()
    {
      return $this->WelcomeCall;
    }

    /**
     * @param WelcomeCall $WelcomeCall
     * @return \Floream\BusinessLogicServices\SalesLogixService\Opportunity
     */
    public function setWelcomeCall($WelcomeCall)
    {
      $this->WelcomeCall = $WelcomeCall;
      return $this;
    }

}
