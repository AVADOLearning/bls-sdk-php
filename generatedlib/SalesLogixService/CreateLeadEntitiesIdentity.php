<?php

namespace Floream\BusinessLogicServices\SalesLogixService;

class CreateLeadEntitiesIdentity
{

    /**
     * @var string $Identifier
     */
    protected $Identifier = null;

    /**
     * @var string $Reference
     */
    protected $Reference = null;

    /**
     * @var ContactType $Type
     */
    protected $Type = null;

    /**
     * @param ContactType $Type
     */
    public function __construct($Type)
    {
      $this->Type = $Type;
    }

    /**
     * @return string
     */
    public function getIdentifier()
    {
      return $this->Identifier;
    }

    /**
     * @param string $Identifier
     * @return \Floream\BusinessLogicServices\SalesLogixService\CreateLeadEntities.Identity
     */
    public function setIdentifier($Identifier)
    {
      $this->Identifier = $Identifier;
      return $this;
    }

    /**
     * @return string
     */
    public function getReference()
    {
      return $this->Reference;
    }

    /**
     * @param string $Reference
     * @return \Floream\BusinessLogicServices\SalesLogixService\CreateLeadEntities.Identity
     */
    public function setReference($Reference)
    {
      $this->Reference = $Reference;
      return $this;
    }

    /**
     * @return ContactType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param ContactType $Type
     * @return \Floream\BusinessLogicServices\SalesLogixService\CreateLeadEntities.Identity
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
