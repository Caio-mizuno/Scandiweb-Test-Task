<?php
namespace Task\Entity;
class book{
    private float $weight;

    function __construct()
    {
        
    }
    function getWeight(){
        return $this->weight;
    }
    function setWeight($weight){
        $this->weight = $weight;
    }

}