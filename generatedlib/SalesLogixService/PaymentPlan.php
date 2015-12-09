<?php

namespace Floream\BusinessLogicServices\SalesLogixService;

class PaymentPlan
{

    /**
     * @var PaymentPlanMethod $Method
     */
    protected $Method = null;

    /**
     * @var Card $PaymentCard
     */
    protected $PaymentCard = null;

    /**
     * @var string $ProductCode
     */
    protected $ProductCode = null;

    /**
     * @var string $Reference
     */
    protected $Reference = null;

    /**
     * @var boolean $TakePayment
     */
    protected $TakePayment = null;

    /**
     * @var PaymentPlanType $Type
     */
    protected $Type = null;

    /**
     * @param PaymentPlanMethod $Method
     * @param boolean $TakePayment
     * @param PaymentPlanType $Type
     */
    public function __construct($Method, $TakePayment, $Type)
    {
      $this->Method = $Method;
      $this->TakePayment = $TakePayment;
      $this->Type = $Type;
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
     * @return \Floream\BusinessLogicServices\SalesLogixService\PaymentPlan
     */
    public function setMethod($Method)
    {
      $this->Method = $Method;
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
     * @return \Floream\BusinessLogicServices\SalesLogixService\PaymentPlan
     */
    public function setPaymentCard($PaymentCard)
    {
      $this->PaymentCard = $PaymentCard;
      return $this;
    }

    /**
     * @return string
     */
    public function getProductCode()
    {
      return $this->ProductCode;
    }

    /**
     * @param string $ProductCode
     * @return \Floream\BusinessLogicServices\SalesLogixService\PaymentPlan
     */
    public function setProductCode($ProductCode)
    {
      $this->ProductCode = $ProductCode;
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
     * @return \Floream\BusinessLogicServices\SalesLogixService\PaymentPlan
     */
    public function setReference($Reference)
    {
      $this->Reference = $Reference;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTakePayment()
    {
      return $this->TakePayment;
    }

    /**
     * @param boolean $TakePayment
     * @return \Floream\BusinessLogicServices\SalesLogixService\PaymentPlan
     */
    public function setTakePayment($TakePayment)
    {
      $this->TakePayment = $TakePayment;
      return $this;
    }

    /**
     * @return PaymentPlanType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param PaymentPlanType $Type
     * @return \Floream\BusinessLogicServices\SalesLogixService\PaymentPlan
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
