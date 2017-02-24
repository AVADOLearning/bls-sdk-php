<?php

namespace AvadoLearning\BusinessLogicServices\SalesLogixService;

class CourseSoftwareEntitiesUpdateSoftwareRequest extends CourseSoftwareEntitiesValidateSoftwareRequest
{

    /**
     * @var \DateTime $DateDownloaded
     */
    protected $DateDownloaded = null;

    /**
     * @param CourseSoftwareEntitiesSoftwareType $Software
     */
    public function __construct($Software)
    {
      parent::__construct($Software);
    }

    /**
     * @return \DateTime
     */
    public function getDateDownloaded()
    {
      if ($this->DateDownloaded == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DateDownloaded);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DateDownloaded
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\CourseSoftwareEntities.UpdateSoftwareRequest
     */
    public function setDateDownloaded(\DateTime $DateDownloaded)
    {
      $this->DateDownloaded = $DateDownloaded->format(\DateTime::ATOM);
      return $this;
    }

}
