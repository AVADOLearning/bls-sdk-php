<?php

namespace AvadoLearning\BusinessLogicServices\SalesLogixService;

class ListItem
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var ArrayOfListItem $SubItems
     */
    protected $SubItems = null;

    /**
     * @var string $Value
     */
    protected $Value = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\ListItem
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return ArrayOfListItem
     */
    public function getSubItems()
    {
      return $this->SubItems;
    }

    /**
     * @param ArrayOfListItem $SubItems
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\ListItem
     */
    public function setSubItems($SubItems)
    {
      $this->SubItems = $SubItems;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param string $Value
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\ListItem
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
