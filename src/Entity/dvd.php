<?php
namespace Task\Entity;

require __DIR__ . '/../../vendor/autoload.php';

use Doctrine\ORM\Mapping as ORM;
use Task\Entity\Product;
/**
 * @ORM\Entity
 * @ORM\Table(name="products")
 */
class dvd extends Product{
    /**
     * @ORM\Column(type="integer")
     */
    public  ?int $size = 0;
    
    public function __construct($sku,$name,$price,$product_type,$size)
    {
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
        $this->product_type = $product_type;
        $this->size = $size;
        $this->height = 0;
        $this->width = 0;
        $this->lenght = 0;
        $this->weight = 0;
    }
    public function getSize():int{
        return $this->size;
    }
    public function setSize($size):void
    {
        $this->size = $size;
    }
}
?>