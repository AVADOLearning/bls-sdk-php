<?php

namespace AvadoLearning\BusinessLogicServices\SalesLogixService;

class WelcomeCall
{

    /**
     * @var \DateTime $Date
     */
    protected $Date = null;

    /**
     * @var string $Status
     */
    protected $Status = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
      if ($this->Date == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Date);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Date
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\WelcomeCall
     */
    public function setDate(\DateTime $Date)
    {
      $this->Date = $Date->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param string $Status
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\WelcomeCall
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

}
