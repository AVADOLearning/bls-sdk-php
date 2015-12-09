<?php

namespace Floream\BusinessLogicServices\SalesLogixService;

class CreateSaleEntitiesIdentity
{

    /**
     * @var string $AuthorisationCode
     */
    protected $AuthorisationCode = null;

    /**
     * @var string $OpportunityId
     */
    protected $OpportunityId = null;

    /**
     * @var boolean $PaymentSuccessful
     */
    protected $PaymentSuccessful = null;

    /**
     * @param boolean $PaymentSuccessful
     */
    public function __construct($PaymentSuccessful)
    {
      $this->PaymentSuccessful = $PaymentSuccessful;
    }

    /**
     * @return string
     */
    public function getAuthorisationCode()
    {
      return $this->AuthorisationCode;
    }

    /**
     * @param string $AuthorisationCode
     * @return \Floream\BusinessLogicServices\SalesLogixService\CreateSaleEntities.Identity
     */
    public function setAuthorisationCode($AuthorisationCode)
    {
      $this->AuthorisationCode = $AuthorisationCode;
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
     * @return \Floream\BusinessLogicServices\SalesLogixService\CreateSaleEntities.Identity
     */
    public function setOpportunityId($OpportunityId)
    {
      $this->OpportunityId = $OpportunityId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPaymentSuccessful()
    {
      return $this->PaymentSuccessful;
    }

    /**
     * @param boolean $PaymentSuccessful
     * @return \Floream\BusinessLogicServices\SalesLogixService\CreateSaleEntities.Identity
     */
    public function setPaymentSuccessful($PaymentSuccessful)
    {
      $this->PaymentSuccessful = $PaymentSuccessful;
      return $this;
    }

}
