<?php

namespace AvadoLearning\BusinessLogicServices\SalesLogixService;

class ArrayOfProductPaymentPlan
{

    /**
     * @var ProductPaymentPlan[] $ProductPaymentPlan
     */
    protected $ProductPaymentPlan = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ProductPaymentPlan[]
     */
    public function getProductPaymentPlan()
    {
      return $this->ProductPaymentPlan;
    }

    /**
     * @param ProductPaymentPlan[] $ProductPaymentPlan
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\ArrayOfProductPaymentPlan
     */
    public function setProductPaymentPlan(array $ProductPaymentPlan)
    {
      $this->ProductPaymentPlan = $ProductPaymentPlan;
      return $this;
    }

}
