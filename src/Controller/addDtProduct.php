<?php
namespace Task\Controller;
require __DIR__ . '/../../vendor/autoload.php';

use Task\EntityProduct\EntityManagerCreator;
use Task\Entity\Product;
use Task\Entity\Dvd;
use Task\Entity\Book;
use Task\Entity\Furniture;
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
        $price = filter_input(INPUT_POST,'price',FILTER_VALIDATE_FLOAT);
        $size = filter_input(INPUT_POST,'size',FILTER_VALIDATE_INT);
        $weight = filter_input(INPUT_POST,'weight',FILTER_VALIDATE_FLOAT);
        $height = filter_input(INPUT_POST,'height',FILTER_VALIDATE_FLOAT);
        $width = filter_input(INPUT_POST,'width',FILTER_VALIDATE_FLOAT);
        $lenght = filter_input(INPUT_POST,'length',FILTER_VALIDATE_FLOAT);
        
       
        //---------------------------------------------------------------
    //VALIDATE OF DUPLICATES
        $allProducts = $this->productRepository->findAll();
        foreach($allProducts as $item)
        {
    //SKU INPUT
            if($item->getSku() === $sku)
            {
                $msg = urlencode('Invalid input, duplicate Sku! Please, insert new Sku!');
                return header('Location: ./addproduct?Message='.$msg,true,302);
                
            }
        }
         //---------------------------------------------------------------
    //VALIDATE OF Number input
        if(str_contains($price,'e') ||str_contains($price,'E')){
            $msg = urlencode('Invalid input, value of price contain character! Please, insert new price!');
            return header('Location: ./addproduct?Message='.$msg,true,302);
        }

        $product_type = $_POST['productType'];
        
        if($product_type == 'DVD'){
            $product_type = 1;
    //CREATING A OBJECT
            $product= new Dvd($sku, $name,$price,$product_type,$size);
        }else if($product_type == 'Book'){
            $product_type = 2;
    //CREATING A OBJECT
            $product= new Book($sku, $name,$price,$product_type,$weight);
        }else{
            $product_type = 3;
    //CREATING A OBJECT
            $product=new Furniture($sku, $name,$price,$product_type,$height,$width,$lenght);
        }
        
        
        
    //POST IN DATABASE
        $this->entityManager->persist($product);
        $this->entityManager->flush();
        
        
        header('Location: /',true,302);
        //header('Location:././productList',true,302);
    }
}