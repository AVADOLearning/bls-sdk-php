<?php

namespace AvadoLearning\BusinessLogicServices\SalesLogixService;

class ExamMembership
{

    /**
     * @var string $Body
     */
    protected $Body = null;

    /**
     * @var string $Number
     */
    protected $Number = null;

    /**
     * @var ExamVoucher $Voucher
     */
    protected $Voucher = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getBody()
    {
      return $this->Body;
    }

    /**
     * @param string $Body
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\ExamMembership
     */
    public function setBody($Body)
    {
      $this->Body = $Body;
      return $this;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param string $Number
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\ExamMembership
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return ExamVoucher
     */
    public function getVoucher()
    {
      return $this->Voucher;
    }

    /**
     * @param ExamVoucher $Voucher
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\ExamMembership
     */
    public function setVoucher($Voucher)
    {
      $this->Voucher = $Voucher;
      return $this;
    }

}
