<?php

namespace AvadoLearning\BusinessLogicServices\SalesLogixService;

class ArrayOfProduct
{

    /**
     * @var Product[] $Product
     */
    protected $Product = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Product[]
     */
    public function getProduct()
    {
      return $this->Product;
    }

    /**
     * @param Product[] $Product
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\ArrayOfProduct
     */
    public function setProduct(array $Product)
    {
      $this->Product = $Product;
      return $this;
    }

}
