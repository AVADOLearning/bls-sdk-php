<?php

namespace Floream\BusinessLogicServices\SalesLogixService;

class ExamEntitiesCreateExamMembershipResponse extends ServiceResponse
{

    /**
     * @var Action $Created
     */
    protected $Created = null;

    /**
     * @var ExamVoucher $Voucher
     */
    protected $Voucher = null;

    /**
     * @param ResponseStatus $Status
     */
    public function __construct($Status)
    {
      parent::__construct($Status);
    }

    /**
     * @return Action
     */
    public function getCreated()
    {
      return $this->Created;
    }

    /**
     * @param Action $Created
     * @return \Floream\BusinessLogicServices\SalesLogixService\ExamEntities.CreateExamMembershipResponse
     */
    public function setCreated($Created)
    {
      $this->Created = $Created;
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
     * @return \Floream\BusinessLogicServices\SalesLogixService\ExamEntities.CreateExamMembershipResponse
     */
    public function setVoucher($Voucher)
    {
      $this->Voucher = $Voucher;
      return $this;
    }

}
