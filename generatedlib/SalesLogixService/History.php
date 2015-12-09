<?php

namespace Floream\BusinessLogicServices\SalesLogixService;

class History
{

    /**
     * @var string $Category
     */
    protected $Category = null;

    /**
     * @var \DateTime $CreateDate
     */
    protected $CreateDate = null;

    /**
     * @var string $CreateUser
     */
    protected $CreateUser = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $Id
     */
    protected $Id = null;

    /**
     * @var string $LongNotes
     */
    protected $LongNotes = null;

    /**
     * @var \DateTime $ModifyDate
     */
    protected $ModifyDate = null;

    /**
     * @var string $ModifyUser
     */
    protected $ModifyUser = null;

    /**
     * @var string $ModifyUserName
     */
    protected $ModifyUserName = null;

    /**
     * @var string $Notes
     */
    protected $Notes = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCategory()
    {
      return $this->Category;
    }

    /**
     * @param string $Category
     * @return \Floream\BusinessLogicServices\SalesLogixService\History
     */
    public function setCategory($Category)
    {
      $this->Category = $Category;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreateDate()
    {
      if ($this->CreateDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CreateDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CreateDate
     * @return \Floream\BusinessLogicServices\SalesLogixService\History
     */
    public function setCreateDate(\DateTime $CreateDate)
    {
      $this->CreateDate = $CreateDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getCreateUser()
    {
      return $this->CreateUser;
    }

    /**
     * @param string $CreateUser
     * @return \Floream\BusinessLogicServices\SalesLogixService\History
     */
    public function setCreateUser($CreateUser)
    {
      $this->CreateUser = $CreateUser;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \Floream\BusinessLogicServices\SalesLogixService\History
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return string
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param string $Id
     * @return \Floream\BusinessLogicServices\SalesLogixService\History
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return string
     */
    public function getLongNotes()
    {
      return $this->LongNotes;
    }

    /**
     * @param string $LongNotes
     * @return \Floream\BusinessLogicServices\SalesLogixService\History
     */
    public function setLongNotes($LongNotes)
    {
      $this->LongNotes = $LongNotes;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getModifyDate()
    {
      if ($this->ModifyDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ModifyDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ModifyDate
     * @return \Floream\BusinessLogicServices\SalesLogixService\History
     */
    public function setModifyDate(\DateTime $ModifyDate)
    {
      $this->ModifyDate = $ModifyDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getModifyUser()
    {
      return $this->ModifyUser;
    }

    /**
     * @param string $ModifyUser
     * @return \Floream\BusinessLogicServices\SalesLogixService\History
     */
    public function setModifyUser($ModifyUser)
    {
      $this->ModifyUser = $ModifyUser;
      return $this;
    }

    /**
     * @return string
     */
    public function getModifyUserName()
    {
      return $this->ModifyUserName;
    }

    /**
     * @param string $ModifyUserName
     * @return \Floream\BusinessLogicServices\SalesLogixService\History
     */
    public function setModifyUserName($ModifyUserName)
    {
      $this->ModifyUserName = $ModifyUserName;
      return $this;
    }

    /**
     * @return string
     */
    public function getNotes()
    {
      return $this->Notes;
    }

    /**
     * @param string $Notes
     * @return \Floream\BusinessLogicServices\SalesLogixService\History
     */
    public function setNotes($Notes)
    {
      $this->Notes = $Notes;
      return $this;
    }

}
