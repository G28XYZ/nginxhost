<?php 
  require_once __DIR__ . '/classes/GuestBook.php';
  
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
  <?php
  // function sendMessage(User $user, $message) {
  //   echo $user->email . '-->' . $message;
  // }

  // $user = new User();

  // $user->email = 'test@mail.ru';

  // sendMessage($user, 'Hello')

  $guestBook = new GuestBook();

  ?>

  <?php
    foreach ($guestBook->getRecords() as $record) { ?>
  <?php echo $record->getMessage(); ?>
  <hr>
  <?php
  } ?>

  <form action="functions.php" method='post'>
    <textarea name="message" cols="30" rows="10"></textarea>
    <button type='submit'>Send message</button>
  </form>
</body>

</html>