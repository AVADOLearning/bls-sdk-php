<?php

namespace AvadoLearning\BusinessLogicServices\SalesLogixService;

class Grade
{

    /**
     * @var boolean $Completed
     */
    protected $Completed = null;

    /**
     * @var \DateTime $CompletedDate
     */
    protected $CompletedDate = null;

    /**
     * @var string $FinalGrade
     */
    protected $FinalGrade = null;

    /**
     * @param boolean $Completed
     */
    public function __construct($Completed)
    {
      $this->Completed = $Completed;
    }

    /**
     * @return boolean
     */
    public function getCompleted()
    {
      return $this->Completed;
    }

    /**
     * @param boolean $Completed
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\Grade
     */
    public function setCompleted($Completed)
    {
      $this->Completed = $Completed;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCompletedDate()
    {
      if ($this->CompletedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CompletedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CompletedDate
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\Grade
     */
    public function setCompletedDate(\DateTime $CompletedDate)
    {
      $this->CompletedDate = $CompletedDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getFinalGrade()
    {
      return $this->FinalGrade;
    }

    /**
     * @param string $FinalGrade
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\Grade
     */
    public function setFinalGrade($FinalGrade)
    {
      $this->FinalGrade = $FinalGrade;
      return $this;
    }

}
