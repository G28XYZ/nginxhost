<?php 
  // header('Set-Cookie: foo=24')
  // setcookie('foo', 24, time() + 86400);
  $users = require_once __DIR__ . '/users.php';
  // setcookie('username', 'admin');
  // setcookie('secret', sha1('03.04.1991'));
  session_start();
?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <base href="/profit/php-1/" />
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP-1</title>
  <link rel="stylesheet" href="./index.css">
</head>

<body>
  <h1>Привет, PHP</h1>
  <a href="./test.php">test</a>
  <?php 
  if($_COOKIE['username'] == 'admin' && $_COOKIE['secret'] == sha1($users['admin']))
  {
    ?>
  <h2>You - admin!</h2>
  <?php
  }
  ?>

</body>

</html>