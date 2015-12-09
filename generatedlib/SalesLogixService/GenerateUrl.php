<?php

namespace Floream\BusinessLogicServices\SalesLogixService;

class GenerateUrl
{

    /**
     * @var ArrayOfKeyValueOfstringanyType $businessInfo
     */
    protected $businessInfo = null;

    /**
     * @param ArrayOfKeyValueOfstringanyType $businessInfo
     */
    public function __construct($businessInfo)
    {
      $this->businessInfo = $businessInfo;
    }

    /**
     * @return ArrayOfKeyValueOfstringanyType
     */
    public function getBusinessInfo()
    {
      return $this->businessInfo;
    }

    /**
     * @param ArrayOfKeyValueOfstringanyType $businessInfo
     * @return \Floream\BusinessLogicServices\SalesLogixService\GenerateUrl
     */
    public function setBusinessInfo($businessInfo)
    {
      $this->businessInfo = $businessInfo;
      return $this;
    }

}
