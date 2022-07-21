<?php

declare(strict_types=1);

require __DIR__ . '/autoload.php';

var_dump($_SERVER['REQUEST_URI']);

$ctrl = $_GET['ctrl'] ?? 'Index';


$class = '\\Controllers\\' . $ctrl;

if(class_exists($class)) {
    $ctrl = new $class;
    $ctrl();
} else {
    die('Страницы не существует');
}