<?php
namespace Task\Controller;
require __DIR__ . '/../../vendor/autoload.php';
//require __DIR__ . '/../vendor/autoload.php';

use Task\Entity\Product;
use Task\EntityProduct\EntityManagerCreator;

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
        header('Location: /',true,302);
    }
}