<?php
namespace Task\Controller;
require __DIR__ . '/../../vendor/autoload.php';

use Task\Entity\Product;
use Task\EntityProduct\EntityManagerCreator;

class addDtProduct{
    
    private $entityManager;
    private $productRepository;
    public function __construct()
    {   
        
        $this->entityManager = (new EntityManagerCreator())
            ->getEntityManager();
            $this->productRepository = $this->entityManager
            ->getRepository(Product::class);
    }
        
    public function requestProcess()
    {
        //SETTING INPUTS OF THE FORM
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
        //---------------------------------------------------------------
        //VALIDATE OF DUPLICATES
        $allProducts = $this->productRepository->findAll();
        foreach($allProducts as $item)
        {
            //SKU INPUT
            if($item->getSku() == $sku)
            {
                $msg = urlencode('Invalid input, duplicate Sku! Please, insert new Sku!');
                header('Location: /addPage?Message='.$msg,true,302);
            }
        }

        //CREATING A OBJECT
        $product = new Product($sku, $name,$price,$product_type,
        $size,$weight,$height,$width,$lenght);
        //CREATING IN DATABASE
        $this->entityManager->persist($product);
        $this->entityManager->flush();

        header('Location: /productList',true,302);
        
        
    }
}