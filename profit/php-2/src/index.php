<?php

declare(strict_types=1);

use Models\HasPriceInterface;
use Models\Product;
use Models\Service;

require __DIR__ . '/autoload.php';

$products = Product::findAll();
$services = Service::findAll();

$view = new View();

$view->products = Product::findAll();
$view->services = Service::findAll();

echo count($view);

$html = $view->render(__DIR__ . '/Templates/main.php');
echo $html;