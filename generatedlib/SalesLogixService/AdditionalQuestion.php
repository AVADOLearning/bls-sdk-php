<?php

namespace AvadoLearning\BusinessLogicServices\SalesLogixService;

class AdditionalQuestion
{

    /**
     * @var string $AnswerCode
     */
    protected $AnswerCode = null;

    /**
     * @var string $QuestionCode
     */
    protected $QuestionCode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getAnswerCode()
    {
      return $this->AnswerCode;
    }

    /**
     * @param string $AnswerCode
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\AdditionalQuestion
     */
    public function setAnswerCode($AnswerCode)
    {
      $this->AnswerCode = $AnswerCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getQuestionCode()
    {
      return $this->QuestionCode;
    }

    /**
     * @param string $QuestionCode
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\AdditionalQuestion
     */
    public function setQuestionCode($QuestionCode)
    {
      $this->QuestionCode = $QuestionCode;
      return $this;
    }

}
