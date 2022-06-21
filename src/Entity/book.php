<?php
namespace Task\Entity;

require __DIR__ . '/../../vendor/autoload.php';

use Doctrine\ORM\Mapping as ORM;
use Task\Entity\Product;
/**
 * @ORM\Entity
 * @ORM\Table(name="products")
 */
class Book extends Product{
     /**
     * @ORM\Column(type="float")
     */
    public ?float $weight = 0;
    public function __construct($sku,$name,$price,$product_type,$weight)
    {
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
        $this->product_type = $product_type;
        $this->weight=$weight;
        $this->size = 0;
        $this->height = 0;
        $this->width = 0;
        $this->lenght = 0;
    }
    public function getWeight():float{
        return $this->weight;
    }
    public function setWeight($weight):void
    {
        $this->weight = $weight;
    }

}