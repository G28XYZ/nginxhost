<?php

declare(strict_types=1);

use Models\HasPriceInterface;
use Models\Product;
use Models\Service;

require __DIR__ . '/autoload.php';

$product = new Product();
$product->title = 'Test other';
$product->price = 100;
$product->save();
$product->delete();