<?php

namespace Floream\BusinessLogicServices\SalesLogixService;

class Coordinates
{

    /**
     * @var int $Latitude
     */
    protected $Latitude = null;

    /**
     * @var int $Longitude
     */
    protected $Longitude = null;

    /**
     * @param int $Latitude
     * @param int $Longitude
     */
    public function __construct($Latitude, $Longitude)
    {
      $this->Latitude = $Latitude;
      $this->Longitude = $Longitude;
    }

    /**
     * @return int
     */
    public function getLatitude()
    {
      return $this->Latitude;
    }

    /**
     * @param int $Latitude
     * @return \Floream\BusinessLogicServices\SalesLogixService\Coordinates
     */
    public function setLatitude($Latitude)
    {
      $this->Latitude = $Latitude;
      return $this;
    }

    /**
     * @return int
     */
    public function getLongitude()
    {
      return $this->Longitude;
    }

    /**
     * @param int $Longitude
     * @return \Floream\BusinessLogicServices\SalesLogixService\Coordinates
     */
    public function setLongitude($Longitude)
    {
      $this->Longitude = $Longitude;
      return $this;
    }

}
