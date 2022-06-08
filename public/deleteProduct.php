<?php
namespace Caiom\Task\Controller;
require __DIR__ . '/../vendor/autoload.php';

use Caiom\Task\Entity\Product;
use Caiom\Task\EntityProduct\EntityManagerCreator;

$entityManager = (new EntityManagerCreator())->getEntityManager();

$id=$_POST['delete_id'];
echo $id;
$product = $entityManager->getRepository(Product::class)->find($id);       
$entityManager->remove($product);
$entityManager->flush();
header('Location: /productList',true,302);
        