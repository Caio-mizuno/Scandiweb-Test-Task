<?php
namespace Caiom\Task\Entity;
class dvd{
    private int $size;
    function __construct()
    {
        
    }
    function getSize(){
        return $this->size;
    }
    function setSize($size)
    {
        $this->size = $size;
    }
}
?>