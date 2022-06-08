<?php
namespace Caiom\Task\Controller;
require __DIR__ . '/../../vendor/autoload.php';

use Caiom\Task\EntityProduct\EntityManagerCreator;
use Caiom\Task\Entity\Product;
use Caiom\Task\Components\Box;
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
       
       require './productList.php';
       ?>
            
       <div class="container flex flex-wrap" >
        <?php
            foreach ($products as $item)
            {
                $box = new Box;
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
                
                $arrayBox[] = $item->getId();
                
            }
            
        
        ?>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src=".\js\deleteScript.js"></script>
        
            <?php
            
    }
}