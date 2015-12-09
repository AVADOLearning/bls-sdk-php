<?php

namespace Floream\BusinessLogicServices\SalesLogixService;

class Card
{

    /**
     * @var string $CardHoldersName
     */
    protected $CardHoldersName = null;

    /**
     * @var string $CardNumber
     */
    protected $CardNumber = null;

    /**
     * @var CardType $CardType
     */
    protected $CardType = null;

    /**
     * @var CardDate $ExpiryDate
     */
    protected $ExpiryDate = null;

    /**
     * @var string $IssueNumber
     */
    protected $IssueNumber = null;

    /**
     * @var string $SecurityNumber
     */
    protected $SecurityNumber = null;

    /**
     * @var CardDate $StartDate
     */
    protected $StartDate = null;

    /**
     * @param CardType $CardType
     */
    public function __construct($CardType)
    {
      $this->CardType = $CardType;
    }

    /**
     * @return string
     */
    public function getCardHoldersName()
    {
      return $this->CardHoldersName;
    }

    /**
     * @param string $CardHoldersName
     * @return \Floream\BusinessLogicServices\SalesLogixService\Card
     */
    public function setCardHoldersName($CardHoldersName)
    {
      $this->CardHoldersName = $CardHoldersName;
      return $this;
    }

    /**
     * @return string
     */
    public function getCardNumber()
    {
      return $this->CardNumber;
    }

    /**
     * @param string $CardNumber
     * @return \Floream\BusinessLogicServices\SalesLogixService\Card
     */
    public function setCardNumber($CardNumber)
    {
      $this->CardNumber = $CardNumber;
      return $this;
    }

    /**
     * @return CardType
     */
    public function getCardType()
    {
      return $this->CardType;
    }

    /**
     * @param CardType $CardType
     * @return \Floream\BusinessLogicServices\SalesLogixService\Card
     */
    public function setCardType($CardType)
    {
      $this->CardType = $CardType;
      return $this;
    }

    /**
     * @return CardDate
     */
    public function getExpiryDate()
    {
      return $this->ExpiryDate;
    }

    /**
     * @param CardDate $ExpiryDate
     * @return \Floream\BusinessLogicServices\SalesLogixService\Card
     */
    public function setExpiryDate($ExpiryDate)
    {
      $this->ExpiryDate = $ExpiryDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getIssueNumber()
    {
      return $this->IssueNumber;
    }

    /**
     * @param string $IssueNumber
     * @return \Floream\BusinessLogicServices\SalesLogixService\Card
     */
    public function setIssueNumber($IssueNumber)
    {
      $this->IssueNumber = $IssueNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getSecurityNumber()
    {
      return $this->SecurityNumber;
    }

    /**
     * @param string $SecurityNumber
     * @return \Floream\BusinessLogicServices\SalesLogixService\Card
     */
    public function setSecurityNumber($SecurityNumber)
    {
      $this->SecurityNumber = $SecurityNumber;
      return $this;
    }

    /**
     * @return CardDate
     */
    public function getStartDate()
    {
      return $this->StartDate;
    }

    /**
     * @param CardDate $StartDate
     * @return \Floream\BusinessLogicServices\SalesLogixService\Card
     */
    public function setStartDate($StartDate)
    {
      $this->StartDate = $StartDate;
      return $this;
    }

}
