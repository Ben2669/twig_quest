<?php

require_once '../vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;


$loader = new FilesystemLoader('../src/View');
$twig = new Environment($loader);

$products = ['product1', 'product2', 'product3', 'product4', 'product5'];

echo $twig->render('index.html.twig', ['products' => $products]);