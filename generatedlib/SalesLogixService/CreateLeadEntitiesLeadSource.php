<?php

namespace Floream\BusinessLogicServices\SalesLogixService;

class CreateLeadEntitiesLeadSource
{

    /**
     * @var string $AnalyticsClientId
     */
    protected $AnalyticsClientId = null;

    /**
     * @var CreateLeadEntitiesBrandAssociation $BrandAssociation
     */
    protected $BrandAssociation = null;

    /**
     * @var string $CampaignCode
     */
    protected $CampaignCode = null;

    /**
     * @var string $Experiment
     */
    protected $Experiment = null;

    /**
     * @var boolean $IsBtb
     */
    protected $IsBtb = null;

    /**
     * @var CreateLeadEntitiesSubmissionType $SubmissionType
     */
    protected $SubmissionType = null;

    /**
     * @var boolean $UseAutoDial
     */
    protected $UseAutoDial = null;

    /**
     * @param CreateLeadEntitiesBrandAssociation $BrandAssociation
     * @param boolean $IsBtb
     * @param CreateLeadEntitiesSubmissionType $SubmissionType
     */
    public function __construct($BrandAssociation, $IsBtb, $SubmissionType)
    {
      $this->BrandAssociation = $BrandAssociation;
      $this->IsBtb = $IsBtb;
      $this->SubmissionType = $SubmissionType;
    }

    /**
     * @return string
     */
    public function getAnalyticsClientId()
    {
      return $this->AnalyticsClientId;
    }

    /**
     * @param string $AnalyticsClientId
     * @return \Floream\BusinessLogicServices\SalesLogixService\CreateLeadEntities.LeadSource
     */
    public function setAnalyticsClientId($AnalyticsClientId)
    {
      $this->AnalyticsClientId = $AnalyticsClientId;
      return $this;
    }

    /**
     * @return CreateLeadEntitiesBrandAssociation
     */
    public function getBrandAssociation()
    {
      return $this->BrandAssociation;
    }

    /**
     * @param CreateLeadEntitiesBrandAssociation $BrandAssociation
     * @return \Floream\BusinessLogicServices\SalesLogixService\CreateLeadEntities.LeadSource
     */
    public function setBrandAssociation($BrandAssociation)
    {
      $this->BrandAssociation = $BrandAssociation;
      return $this;
    }

    /**
     * @return string
     */
    public function getCampaignCode()
    {
      return $this->CampaignCode;
    }

    /**
     * @param string $CampaignCode
     * @return \Floream\BusinessLogicServices\SalesLogixService\CreateLeadEntities.LeadSource
     */
    public function setCampaignCode($CampaignCode)
    {
      $this->CampaignCode = $CampaignCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getExperiment()
    {
      return $this->Experiment;
    }

    /**
     * @param string $Experiment
     * @return \Floream\BusinessLogicServices\SalesLogixService\CreateLeadEntities.LeadSource
     */
    public function setExperiment($Experiment)
    {
      $this->Experiment = $Experiment;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsBtb()
    {
      return $this->IsBtb;
    }

    /**
     * @param boolean $IsBtb
     * @return \Floream\BusinessLogicServices\SalesLogixService\CreateLeadEntities.LeadSource
     */
    public function setIsBtb($IsBtb)
    {
      $this->IsBtb = $IsBtb;
      return $this;
    }

    /**
     * @return CreateLeadEntitiesSubmissionType
     */
    public function getSubmissionType()
    {
      return $this->SubmissionType;
    }

    /**
     * @param CreateLeadEntitiesSubmissionType $SubmissionType
     * @return \Floream\BusinessLogicServices\SalesLogixService\CreateLeadEntities.LeadSource
     */
    public function setSubmissionType($SubmissionType)
    {
      $this->SubmissionType = $SubmissionType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUseAutoDial()
    {
      return $this->UseAutoDial;
    }

    /**
     * @param boolean $UseAutoDial
     * @return \Floream\BusinessLogicServices\SalesLogixService\CreateLeadEntities.LeadSource
     */
    public function setUseAutoDial($UseAutoDial)
    {
      $this->UseAutoDial = $UseAutoDial;
      return $this;
    }

}
