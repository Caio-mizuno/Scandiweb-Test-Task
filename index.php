<?php

//define("CWD",getcwd());
//$path = str_replace("/public_html/public","/public_html/vendor/autoload.php",CWD);

require __DIR__ . '/vendor/autoload.php';

use Task\Controller\ProductList;
use Task\Controller\addDtProduct;
use Task\Controller\deleteProduct;



$url = $_SERVER['SCRIPT_URL'];


// if($url != '/')
//     $url = str_replace("/index.php","",$url);

switch ($url){
    
        case '/':
            $controller = new ProductList();
            $controller->requestProcess();
        break; 
        case '/add-product':
            require_once __DIR__.'/View/addPage.php'; 
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