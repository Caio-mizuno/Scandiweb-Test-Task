<?php
namespace Caiom\Task\Controller;
require __DIR__ . '/../../vendor/autoload.php';

use Caiom\Task\Entity\Product;
use Caiom\Task\EntityProduct\EntityManagerCreator;

class addDtProduct{
    
    private $entityManager;
    public function __construct()
    {   
        
        $this->entityManager = (new EntityManagerCreator())
            ->getEntityManager();
    }
        
    public function requestProcess()
    {
        $sku = filter_input(INPUT_POST,'sku',FILTER_SANITIZE_STRING);
        $name = filter_input(INPUT_POST,'name',FILTER_SANITIZE_STRING);
        $price = filter_input(INPUT_POST,'price',FILTER_VALIDATE_INT);
        $size = filter_input(INPUT_POST,'size',FILTER_VALIDATE_INT);
        $weight = filter_input(INPUT_POST,'weight',FILTER_VALIDATE_FLOAT);
        $height = filter_input(INPUT_POST,'height',FILTER_VALIDATE_FLOAT);
        $width = filter_input(INPUT_POST,'width',FILTER_VALIDATE_FLOAT);
        $lenght = filter_input(INPUT_POST,'lenght',FILTER_VALIDATE_FLOAT);
        
        $product_type = $_POST['product_type'];
        if($product_type == 'dvd'){
            $product_type = 1;
        }else if($product_type == 'book'){
            $product_type = 2;
        }else{
            $product_type = 3;
        }

        $product = new Product($sku, $name,$price,$product_type,
        $size,$weight,$height,$width,$lenght);

        $this->entityManager->persist($product);
        $this->entityManager->flush();

        header('Location: /productList',true,302);
    }
}