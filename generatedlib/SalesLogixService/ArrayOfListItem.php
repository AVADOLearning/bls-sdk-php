<?php

namespace Floream\BusinessLogicServices\SalesLogixService;

class ArrayOfListItem
{

    /**
     * @var ListItem[] $ListItem
     */
    protected $ListItem = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ListItem[]
     */
    public function getListItem()
    {
      return $this->ListItem;
    }

    /**
     * @param ListItem[] $ListItem
     * @return \Floream\BusinessLogicServices\SalesLogixService\ArrayOfListItem
     */
    public function setListItem(array $ListItem)
    {
      $this->ListItem = $ListItem;
      return $this;
    }

}
