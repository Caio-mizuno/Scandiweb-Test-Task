<?php
namespace Caiom\Task\Controller;
require __DIR__ . '/../../vendor/autoload.php';
//require __DIR__ . '/../vendor/autoload.php';

use Caiom\Task\Entity\Product;
use Caiom\Task\EntityProduct\EntityManagerCreator;

class deleteProduct{
    public function deleteAPI()
    {
    $entityManager = (new EntityManagerCreator())->getEntityManager();

    $id=$_POST['delete_id'];
    echo $id;
    $product = $entityManager->getRepository(Product::class)->find($id);       
    $entityManager->remove($product);
    $entityManager->flush();
    }
    public function redirectAPI(){
        header('Location: /productList',true,302);
    }
}