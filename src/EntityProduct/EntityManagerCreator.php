<?php
namespace Task\EntityProduct;
require_once __DIR__ . '/../../vendor/autoload.php';
use \Doctrine\ORM\EntityManager;
use \Doctrine\ORM\EntityManagerInterface;
use \Doctrine\ORM\Tools\Setup;

class EntityManagerCreator
{
    public function getEntityManager():EntityManagerInterface
    {
        
        define("PATH",getcwd());
        $path = str_replace("/public_html","/public_html/src/Entity/",PATH);
        
        $paths = [$path];
        
        
        $isDevMode = true;
        
         $dbParams = array(
            'driver' => 'mysqli',
            'user' => 'u783589280_user_root',
            'password' => 'Aa-9071996@C',
            'dbname' => 'u783589280_product_list',
            'host' => 'localhost',
            'port' => '3306'
        );

        $config = Setup::createAnnotationMetadataConfiguration(
            $paths,$isDevMode,null,null,false
        );
        
        return EntityManager::create($dbParams, $config);
    }
}
