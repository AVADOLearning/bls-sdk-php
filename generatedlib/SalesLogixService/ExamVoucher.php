<?php

namespace AvadoLearning\BusinessLogicServices\SalesLogixService;

class ExamVoucher
{

    /**
     * @var \DateTime $ExpiryDate
     */
    protected $ExpiryDate = null;

    /**
     * @var \DateTime $IssueDate
     */
    protected $IssueDate = null;

    /**
     * @var Action $Issued
     */
    protected $Issued = null;

    /**
     * @var string $Number
     */
    protected $Number = null;

    /**
     * @param \DateTime $ExpiryDate
     * @param \DateTime $IssueDate
     */
    public function __construct(\DateTime $ExpiryDate, \DateTime $IssueDate)
    {
      $this->ExpiryDate = $ExpiryDate->format(\DateTime::ATOM);
      $this->IssueDate = $IssueDate->format(\DateTime::ATOM);
    }

    /**
     * @return \DateTime
     */
    public function getExpiryDate()
    {
      if ($this->ExpiryDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ExpiryDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ExpiryDate
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\ExamVoucher
     */
    public function setExpiryDate(\DateTime $ExpiryDate)
    {
      $this->ExpiryDate = $ExpiryDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getIssueDate()
    {
      if ($this->IssueDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->IssueDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $IssueDate
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\ExamVoucher
     */
    public function setIssueDate(\DateTime $IssueDate)
    {
      $this->IssueDate = $IssueDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return Action
     */
    public function getIssued()
    {
      return $this->Issued;
    }

    /**
     * @param Action $Issued
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\ExamVoucher
     */
    public function setIssued($Issued)
    {
      $this->Issued = $Issued;
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
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\ExamVoucher
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

}
