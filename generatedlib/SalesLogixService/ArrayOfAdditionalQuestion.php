<?php

namespace AvadoLearning\BusinessLogicServices\SalesLogixService;

class ArrayOfAdditionalQuestion
{

    /**
     * @var AdditionalQuestion[] $AdditionalQuestion
     */
    protected $AdditionalQuestion = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AdditionalQuestion[]
     */
    public function getAdditionalQuestion()
    {
      return $this->AdditionalQuestion;
    }

    /**
     * @param AdditionalQuestion[] $AdditionalQuestion
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\ArrayOfAdditionalQuestion
     */
    public function setAdditionalQuestion(array $AdditionalQuestion)
    {
      $this->AdditionalQuestion = $AdditionalQuestion;
      return $this;
    }

}
