<?php

require __DIR__ . '/autoload.php';

$guestBook = new GuestBook();

$view = new View();
$view->assign('guestBook', $guestBook);

$view->display(__DIR__ . '/templates/index.php');