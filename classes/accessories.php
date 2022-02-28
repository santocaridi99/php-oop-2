<?php
require_once __DIR__ . "/product.php";
class Accessories extends Product{
    // tipo di accessorio
    protected string $aType;
    // costruttore
    function __construct(array $_productData)
    {
        $requiredKeys = ["aType"];
        foreach($requiredKeys as $key){
            if(!key_exists($key,$_productData)){
                var_dump("Mancano chiavi $key");
            }
        }
        parent::__construct($_productData);
        $this->setAType($_productData);
    }
   

    /**
     * Get the value of aType
     */ 
    public function getAType()
    {
        return $this->aType;
    }

    /**
     * Set the value of aType
     *
     * @return  self
     */ 
    public function setAType($aType)
    {
        $this->aType = $aType;

        return $this;
    }
}