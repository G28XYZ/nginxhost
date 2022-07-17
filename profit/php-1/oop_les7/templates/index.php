<!DOCTYPE html>
<html lang="ru">

<head>
  <base href="/" />
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP-1</title>
  <link rel="stylesheet" href="/templates/index.css">
</head>

<body>
  <?php 
  foreach ($this->data['guestBook']->getRecords() as $record) { 
      $record->display(__DIR__ . '/guestBookRecord.php');
  }
  ?>
  <hr>


  <form action="/functions.php" method='post'>
    <textarea name="message" cols="30" rows="10"></textarea>
    <button type='submit'>Send message</button>
  </form>
</body>

</html>