<?php

require __DIR__ . '/../vendor/autoload.php';

use Caiom\Task\Controller\ProductList;
use Caiom\Task\Controller\addDtProduct;
use Caiom\Task\Controller\deleteProduct;

// verify if the session is starting with /productlist path;
$sessionInit = stripos($_SERVER['PATH_INFO'],'productList');

//If it isnot, it will be redirect to /productlist path
if($sessionInit === false){
    header('Location: /productList',true,302);
    $controller = new ProductList();
    $controller->requestProcess();
}else{

switch ($_SERVER['PATH_INFO']){
        
        case '/addPage':
            require './View/addPage.php';
            break;
        case '/productList':
            $controller = new ProductList();
            $controller->requestProcess();
            break;    
        case '/saveProduct':
            $controller = new addDtProduct();
            $controller->requestProcess();
            break;
        case '/deleteProduct':
            $controller = new deleteProduct();
            $controller->deleteApi();
            break;
        default:
            http_response_code(404);
            break;
    }
}
?>