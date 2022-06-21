<?php
namespace Task\Entity;

require __DIR__ . '/../../vendor/autoload.php';

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="products")
 */
class Product{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
     /**
     * @ORM\Column(type="string")
     */
    public string $sku;
     /**
     * @ORM\Column(type="string")
     */
    public string $name;
     /**
     * @ORM\Column(type="float")
     */
    public float $price;
     /**
     * @ORM\Column(type="integer")
     */
    public int $product_type;
     /**
     * @ORM\Column(type="integer")
     */
    public ?int $size = 0;
     /**
     * @ORM\Column(type="float")
     */
    public ?float $weight = 0;
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
    
    public function __construct($sku,$name,$price,$product_type,?int $size = null,?float $weight = null,
    ?float $height = null,?float $width = null,?float $lenght = null)
    {
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
        $this->product_type = $product_type;
        $this->size = $size;
        $this->weight = $weight;
        $this->height = $height;
        $this->width = $width;
        $this->lenght = $lenght;
        
    }
 
    // -------------------------------------------------------
    // --- GETS ---
    function getId():int
    {
        return $this->id;
    }
    function getSku(): string
    {
        return $this->sku;
    }
    function getName(): string
    {
        return $this->name;
    }
    function getPrice(): float
    {
        return $this->price;
    }
    function getProductType(): int
    {
        return $this->product_type;
    }
    function getSize(): int
    {   
        if($this->size)return $this->size;
        else return 0;
    }
    function getWeight(): float
    {
        if($this->weight) return $this->weight;
        else return 0;
    }
    function getHeight(): float
    {
        if($this->height)return $this->height;
        else return 0;
    }
    function getWidth(): float
    {
        if($this->width)return $this->width;
        else return 0;
    }
    function getLenght(): float
    {
        if($this->lenght)return $this->lenght;
        else return 0;
    }
    
    // -------------------------------------------------------
    // --- SETS ---
    function setSku($sku): void
    {
        $this->sku = $sku;
    }
    function setName($name): void
    {
        $this->name = $name;
    }
    function setPrice($price): void
    {
        $this->price = $price;
    }
    function setproduct_type($product_type): void
    {
        $this->product_type = $product_type;
    }
    function setSize($size): void
    {
         $this->size = $size;
    }
    function setWeight($weight): void
    {
         $this->weight = $weight;
    }
    function setHeight($height): void
    {
         $this->height = $height;
    }
    function setWidth($width): void
    {
         $this->width = $width;
    }
    function setLenght($lenght): void
    {
         $this->lenght = $lenght;
    }
}

?>