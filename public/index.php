<?php

require __DIR__ . '/../vendor/autoload.php';

use Caiom\Task\Controller\ProductList;
use Caiom\Task\Controller\addDtProduct;
use Caiom\Task\Controller\deleteProduct;

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
?>