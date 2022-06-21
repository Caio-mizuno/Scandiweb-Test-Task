<?php
namespace Task\Entity;

require __DIR__ . '/../../vendor/autoload.php';

use Doctrine\ORM\Mapping as ORM;
use Task\Entity\Product;
/**
 * @ORM\Entity
 * @ORM\Table(name="products")
 */
class Furniture extends Product{
   /**
     * @ORM\Column(type="float")
     */
    public ?float $height = 0;
     /**
     * @ORM\Column(type="float")
     */
    public ?float $width = 0;
     /**
     * @ORM\Column(type="float")
     */
    public ?float $lenght = 0;
    public function __construct($sku,$name,$price,$product_type,$height,$width,$lenght)
    {
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
        $this->product_type = $product_type;
        $this->height = $height;
        $this->width = $width;
        $this->lenght = $lenght;
        $this->weight = 0;
        $this->size = 0;
    }
    
    public function getHeight():float{
        return $this->height;
    }
    public function getWidth():float{
        return $this->width;
    }
    public function getLenght():float{
        return $this->lenght;
    }
    public function setHeight($height):void
    {
        $this->height = $height;
    }
    public function setWidth($width):void
    {
        $this->width = $width;
    }
    public function setLenght($lenght):void
    {
        $this->lenght = $lenght;
    }
}
?>