<?php

namespace AvadoLearning\BusinessLogicServices\SalesLogixService;

class Action
{

    /**
     * @var ArrayOfstring $Reasons
     */
    protected $Reasons = null;

    /**
     * @var boolean $Success
     */
    protected $Success = null;

    /**
     * @param boolean $Success
     */
    public function __construct($Success)
    {
      $this->Success = $Success;
    }

    /**
     * @return ArrayOfstring
     */
    public function getReasons()
    {
      return $this->Reasons;
    }

    /**
     * @param ArrayOfstring $Reasons
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\Action
     */
    public function setReasons($Reasons)
    {
      $this->Reasons = $Reasons;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSuccess()
    {
      return $this->Success;
    }

    /**
     * @param boolean $Success
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\Action
     */
    public function setSuccess($Success)
    {
      $this->Success = $Success;
      return $this;
    }

}
