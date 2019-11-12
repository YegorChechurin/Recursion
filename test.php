<?php

require_once 'Product.php';
require_once 'Container.php';
require_once 'ProductSearcher.php';

$stock = new Container(0);

// Building 1st layer
$container_1 = new Container(1);
$container_2 = new Container(2);
$stock->addContainers($container_1);
$stock->addContainers($container_2);

//var_dump($stock->getContainers()[1]);

// Building second layer
$container_1_1 = new Container(3);
$container_1_2 = new Container(4);
$container_1->addContainers($container_1_1);
$container_1->addContainers($container_1_2);
$container_2_1 = new Container(5);
$container_2_2 = new Container(6);
$container_2->addContainers($container_2_1);
$container_2->addContainers($container_2_2);


$product = new Product('green_socks');
$container_2_2->addProducts($product);

// Testing

$searcher = new ProductSearcher();
$path_to_product = $searcher->findFirstMatch('green_socks', $stock);

var_dump($path_to_product);