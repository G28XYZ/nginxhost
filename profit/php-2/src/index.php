<?php
ini_set("html_errors",true);
$ENV = getenv();
// phpinfo();
$dbh = new PDO('pgsql:host=db;dbname=php', 'postgres', 'db_php2_pass');
// use Models\Product;
// use Models\User;

// spl_autoload_register(function ($class) {
//     require __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
// });


// $data = User::findAll();
// var_dump($data);