<?php

namespace AvadoLearning\BusinessLogicServices\SalesLogixService;

class CourseSoftwareEntitiesValidateSoftwareResponse2 extends ServiceResponse
{

    /**
     * @var string $RedirectTo
     */
    protected $RedirectTo = null;

    /**
     * @var ArrayOfKeyValueOfstringstring $RequestData
     */
    protected $RequestData = null;

    /**
     * @var string $RequestUrl
     */
    protected $RequestUrl = null;

    /**
     * @var \DateTime $Requested
     */
    protected $Requested = null;

    /**
     * @var ArrayOfKeyValueOfstringstring $ResponseData
     */
    protected $ResponseData = null;

    /**
     * @param ResponseStatus $Status
     * @param \DateTime $Requested
     */
    public function __construct($Status, \DateTime $Requested)
    {
      parent::__construct($Status);
      $this->Requested = $Requested->format(\DateTime::ATOM);
    }

    /**
     * @return string
     */
    public function getRedirectTo()
    {
      return $this->RedirectTo;
    }

    /**
     * @param string $RedirectTo
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\CourseSoftwareEntities.ValidateSoftwareResponse2
     */
    public function setRedirectTo($RedirectTo)
    {
      $this->RedirectTo = $RedirectTo;
      return $this;
    }

    /**
     * @return ArrayOfKeyValueOfstringstring
     */
    public function getRequestData()
    {
      return $this->RequestData;
    }

    /**
     * @param ArrayOfKeyValueOfstringstring $RequestData
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\CourseSoftwareEntities.ValidateSoftwareResponse2
     */
    public function setRequestData($RequestData)
    {
      $this->RequestData = $RequestData;
      return $this;
    }

    /**
     * @return string
     */
    public function getRequestUrl()
    {
      return $this->RequestUrl;
    }

    /**
     * @param string $RequestUrl
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\CourseSoftwareEntities.ValidateSoftwareResponse2
     */
    public function setRequestUrl($RequestUrl)
    {
      $this->RequestUrl = $RequestUrl;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getRequested()
    {
      if ($this->Requested == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Requested);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Requested
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\CourseSoftwareEntities.ValidateSoftwareResponse2
     */
    public function setRequested(\DateTime $Requested)
    {
      $this->Requested = $Requested->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return ArrayOfKeyValueOfstringstring
     */
    public function getResponseData()
    {
      return $this->ResponseData;
    }

    /**
     * @param ArrayOfKeyValueOfstringstring $ResponseData
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\CourseSoftwareEntities.ValidateSoftwareResponse2
     */
    public function setResponseData($ResponseData)
    {
      $this->ResponseData = $ResponseData;
      return $this;
    }

}
