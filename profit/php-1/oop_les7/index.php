<?php


require __DIR__ . '/autoload.php';

use App\View;

$guestBook = new \App\Models\GuestBook\Book();

$view = new View();
$view->assign('book', $guestBook);

$view->display(__DIR__ . '/templates/index.php');