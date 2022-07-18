<?php

// require_once __DIR__ . '/Models/GuestBook/Book.php';
// require_once __DIR__ . '/Models/GuestBook/Record.php';

use App\Models\GuestBook\Book;
use App\Models\GuestBook\Record;

$guestBook = new Book();
$record = new Record($_POST['message']);

$guestBook->append($record);
$guestBook->save();

header('Location: /');