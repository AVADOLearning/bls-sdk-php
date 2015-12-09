<?php

namespace Floream\BusinessLogicServices\SalesLogixService;

class CreateSaleEntitiesCreateSaleRequest extends ServiceRequest
{

    /**
     * @var string $DeliveryId
     */
    protected $DeliveryId = null;

    /**
     * @var PaymentPlan $PaymentPlan
     */
    protected $PaymentPlan = null;

    /**
     * @var string $StudentId
     */
    protected $StudentId = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getDeliveryId()
    {
      return $this->DeliveryId;
    }

    /**
     * @param string $DeliveryId
     * @return \Floream\BusinessLogicServices\SalesLogixService\CreateSaleEntities.CreateSaleRequest
     */
    public function setDeliveryId($DeliveryId)
    {
      $this->DeliveryId = $DeliveryId;
      return $this;
    }

    /**
     * @return PaymentPlan
     */
    public function getPaymentPlan()
    {
      return $this->PaymentPlan;
    }

    /**
     * @param PaymentPlan $PaymentPlan
     * @return \Floream\BusinessLogicServices\SalesLogixService\CreateSaleEntities.CreateSaleRequest
     */
    public function setPaymentPlan($PaymentPlan)
    {
      $this->PaymentPlan = $PaymentPlan;
      return $this;
    }

    /**
     * @return string
     */
    public function getStudentId()
    {
      return $this->StudentId;
    }

    /**
     * @param string $StudentId
     * @return \Floream\BusinessLogicServices\SalesLogixService\CreateSaleEntities.CreateSaleRequest
     */
    public function setStudentId($StudentId)
    {
      $this->StudentId = $StudentId;
      return $this;
    }

}
