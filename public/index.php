<?php

require __DIR__ . '/../vendor/autoload.php';

use Caiom\Task\Controller\ProductList;
use Caiom\Task\Controller\addDtProduct;

switch ($_SERVER['PATH_INFO']){
        
        case '/addPage':
            require 'addPage.php';
            break;
        case '/productList':
            // require 'productList.php';
            $controller = new ProductList();
            $controller->requestProcess();
            break;    
        case '/saveProduct':
            $controller = new addDtProduct();
            $controller->requestProcess();
            break;
        
        default:
            echo "ERROR 404";
            break;
    }
?>