<?php

namespace AvadoLearning\BusinessLogicServices\SalesLogixService;

class DateSpan
{

    /**
     * @var \DateTime $Finish
     */
    protected $Finish = null;

    /**
     * @var \DateTime $Start
     */
    protected $Start = null;

    /**
     * @param \DateTime $Finish
     * @param \DateTime $Start
     */
    public function __construct(\DateTime $Finish, \DateTime $Start)
    {
      $this->Finish = $Finish->format(\DateTime::ATOM);
      $this->Start = $Start->format(\DateTime::ATOM);
    }

    /**
     * @return \DateTime
     */
    public function getFinish()
    {
      if ($this->Finish == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Finish);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Finish
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\DateSpan
     */
    public function setFinish(\DateTime $Finish)
    {
      $this->Finish = $Finish->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStart()
    {
      if ($this->Start == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Start);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Start
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\DateSpan
     */
    public function setStart(\DateTime $Start)
    {
      $this->Start = $Start->format(\DateTime::ATOM);
      return $this;
    }

}
