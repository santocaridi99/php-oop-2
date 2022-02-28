<?php
require_once __DIR__ . "/product.php";

class Toy extends Product{
    // il giocattolo è per allenamento?
    protected bool $isForTraining;
    // tipo di materiale del giocattolo
    protected string $material;
    // funzione costruttore
    function __construct(array $_toysData){
        

    }
    



    /**
     * Get the value of isForTraining
     */ 
    public function getIsForTraining()
    {
        return $this->isForTraining;
    }

    /**
     * Set the value of isForTraining
     *
     * @return  self
     */ 
    public function setIsForTraining($isForTraining)
    {
        $this->isForTraining = $isForTraining;

        return $this;
    }

    /**
     * Get the value of material
     */ 
    public function getMaterial()
    {
        return $this->material;
    }

    /**
     * Set the value of material
     *
     * @return  self
     */ 
    public function setMaterial($material)
    {
        $this->material = $material;

        return $this;
    }
}