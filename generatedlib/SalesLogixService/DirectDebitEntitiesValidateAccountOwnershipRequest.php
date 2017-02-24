<?php

namespace AvadoLearning\BusinessLogicServices\SalesLogixService;

class DirectDebitEntitiesValidateAccountOwnershipRequest extends ServiceRequest
{

    /**
     * @var string $AccountNumber
     */
    protected $AccountNumber = null;

    /**
     * @var string $BuildingSocietyRollNumber
     */
    protected $BuildingSocietyRollNumber = null;

    /**
     * @var string $OpportunityId
     */
    protected $OpportunityId = null;

    /**
     * @var string $SalesLogixUserId
     */
    protected $SalesLogixUserId = null;

    /**
     * @var string $SortCode
     */
    protected $SortCode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getAccountNumber()
    {
      return $this->AccountNumber;
    }

    /**
     * @param string $AccountNumber
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\DirectDebitEntities.ValidateAccountOwnershipRequest
     */
    public function setAccountNumber($AccountNumber)
    {
      $this->AccountNumber = $AccountNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getBuildingSocietyRollNumber()
    {
      return $this->BuildingSocietyRollNumber;
    }

    /**
     * @param string $BuildingSocietyRollNumber
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\DirectDebitEntities.ValidateAccountOwnershipRequest
     */
    public function setBuildingSocietyRollNumber($BuildingSocietyRollNumber)
    {
      $this->BuildingSocietyRollNumber = $BuildingSocietyRollNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getOpportunityId()
    {
      return $this->OpportunityId;
    }

    /**
     * @param string $OpportunityId
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\DirectDebitEntities.ValidateAccountOwnershipRequest
     */
    public function setOpportunityId($OpportunityId)
    {
      $this->OpportunityId = $OpportunityId;
      return $this;
    }

    /**
     * @return string
     */
    public function getSalesLogixUserId()
    {
      return $this->SalesLogixUserId;
    }

    /**
     * @param string $SalesLogixUserId
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\DirectDebitEntities.ValidateAccountOwnershipRequest
     */
    public function setSalesLogixUserId($SalesLogixUserId)
    {
      $this->SalesLogixUserId = $SalesLogixUserId;
      return $this;
    }

    /**
     * @return string
     */
    public function getSortCode()
    {
      return $this->SortCode;
    }

    /**
     * @param string $SortCode
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\DirectDebitEntities.ValidateAccountOwnershipRequest
     */
    public function setSortCode($SortCode)
    {
      $this->SortCode = $SortCode;
      return $this;
    }

}
