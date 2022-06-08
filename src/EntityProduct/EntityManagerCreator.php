<?php
namespace Caiom\Task\EntityProduct;
require_once __DIR__ . '/../../vendor/autoload.php';
use \Doctrine\ORM\EntityManager;
use \Doctrine\ORM\EntityManagerInterface;
use \Doctrine\ORM\Tools\Setup;

class EntityManagerCreator
{
    public function getEntityManager():EntityManagerInterface
    {
        $paths = [__DIR__.'/../../Entity'];
        
        $isDevMode = false;

        $dbParams = array(
            'driver' => 'pdo_mysql',
            'user' => 'root',
            'passwords' => '',
            'dbname' => 'product_list',
            'host' => 'localhost',
            'port' => '3306'
        );

        $config = Setup::createAnnotationMetadataConfiguration(
            $paths,$isDevMode,null,null,false
        );
        return EntityManager::create($dbParams, $config);
    }
}
