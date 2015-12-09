<?php

namespace Floream\BusinessLogicServices\SalesLogixService;

class CreateSaleEntitiesCreateAdhocPaymentRequest extends ServiceRequest
{

    /**
     * @var PaymentPlanMethod $Method
     */
    protected $Method = null;

    /**
     * @var string $OpportunityId
     */
    protected $OpportunityId = null;

    /**
     * @var Card $PaymentCard
     */
    protected $PaymentCard = null;

    /**
     * @var ArrayOfProductPaymentPlan $ProductPayments
     */
    protected $ProductPayments = null;

    /**
     * @var string $Reference
     */
    protected $Reference = null;

    /**
     * @var string $SalesLogixUserId
     */
    protected $SalesLogixUserId = null;

    /**
     * @param PaymentPlanMethod $Method
     */
    public function __construct($Method)
    {
      $this->Method = $Method;
    }

    /**
     * @return PaymentPlanMethod
     */
    public function getMethod()
    {
      return $this->Method;
    }

    /**
     * @param PaymentPlanMethod $Method
     * @return \Floream\BusinessLogicServices\SalesLogixService\CreateSaleEntities.CreateAdhocPaymentRequest
     */
    public function setMethod($Method)
    {
      $this->Method = $Method;
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
     * @return \Floream\BusinessLogicServices\SalesLogixService\CreateSaleEntities.CreateAdhocPaymentRequest
     */
    public function setOpportunityId($OpportunityId)
    {
      $this->OpportunityId = $OpportunityId;
      return $this;
    }

    /**
     * @return Card
     */
    public function getPaymentCard()
    {
      return $this->PaymentCard;
    }

    /**
     * @param Card $PaymentCard
     * @return \Floream\BusinessLogicServices\SalesLogixService\CreateSaleEntities.CreateAdhocPaymentRequest
     */
    public function setPaymentCard($PaymentCard)
    {
      $this->PaymentCard = $PaymentCard;
      return $this;
    }

    /**
     * @return ArrayOfProductPaymentPlan
     */
    public function getProductPayments()
    {
      return $this->ProductPayments;
    }

    /**
     * @param ArrayOfProductPaymentPlan $ProductPayments
     * @return \Floream\BusinessLogicServices\SalesLogixService\CreateSaleEntities.CreateAdhocPaymentRequest
     */
    public function setProductPayments($ProductPayments)
    {
      $this->ProductPayments = $ProductPayments;
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
     * @return \Floream\BusinessLogicServices\SalesLogixService\CreateSaleEntities.CreateAdhocPaymentRequest
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
     * @return \Floream\BusinessLogicServices\SalesLogixService\CreateSaleEntities.CreateAdhocPaymentRequest
     */
    public function setSalesLogixUserId($SalesLogixUserId)
    {
      $this->SalesLogixUserId = $SalesLogixUserId;
      return $this;
    }

}
