<?php

namespace Floream\BusinessLogicServices\SalesLogixService;

class HistoryEntitiesCreateHistoryResponse extends ServiceResponse
{

    /**
     * @param ResponseStatus $Status
     */
    public function __construct($Status)
    {
      parent::__construct($Status);
    }

}
