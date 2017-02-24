<?php

namespace AvadoLearning\BusinessLogicServices\SalesLogixService;

class Communication
{

    /**
     * @var boolean $EmailStop
     */
    protected $EmailStop = null;

    /**
     * @param boolean $EmailStop
     */
    public function __construct($EmailStop)
    {
      $this->EmailStop = $EmailStop;
    }

    /**
     * @return boolean
     */
    public function getEmailStop()
    {
      return $this->EmailStop;
    }

    /**
     * @param boolean $EmailStop
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\Communication
     */
    public function setEmailStop($EmailStop)
    {
      $this->EmailStop = $EmailStop;
      return $this;
    }

}
