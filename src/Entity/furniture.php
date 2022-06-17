<?php
namespace Task\Entity;
class furniture{
    private float $height;
    private float $width;
    private float $lenght;
    function __construct()
    {
        
    }
    
    function getHeight(){
        return $this->height;
    }
    function getWidth(){
        return $this->width;
    }
    function getLenght(){
        return $this->lenght;
    }
    function setHeight($height)
    {
        $this->height = $height;
    }
    function setWidth($width)
    {
        $this->width = $width;
    }
    function setLenght($lenght)
    {
        $this->lenght = $lenght;
    }
}
?>