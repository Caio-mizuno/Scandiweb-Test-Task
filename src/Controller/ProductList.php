<?php
namespace Task\Controller;
require __DIR__ . '/../../vendor/autoload.php';

use Task\EntityProduct\EntityManagerCreator;
use Task\Entity\Product;
use Task\Components\boxProducts;
class ProductList{
    private $productRepository;
    public function __construct()
    {   
        
        $entityManager = (new EntityManagerCreator())
            ->getEntityManager();
        $this->productRepository = $entityManager
            ->getRepository(Product::class);
    }
        
    public function requestProcess()
    {
       
       $products = $this->productRepository->findAll();
       
       require './View/productList.php';
       ?>
            
       <div class="container flex flex-wrap" >
        <?php
            foreach ($products as $item)
            {
                $box = new boxProducts;
                $box->createBox(
                    $item->getId(),
                    $item->getSku(),
                    $item->getName(),
                    $item->getPrice(),
                    $item->getProductType(),
                    $item->getSize(),
                    $item->getWeight(),
                    $item->getHeight(),
                    $item->getWidth(),
                    $item->getLenght()
                );                
            }
            
        
        ?>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src=".\js\deleteScript.js"></script>
        
            <?php
            
    }
}