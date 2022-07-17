<?php 
  
  require_once __DIR__ . '/classes/GuestBook.php';

  include __DIR__ . '/guests.php';

  $file = __DIR__ . '/guests.txt';

  $guestBook = new GuestBook($file);
  $guestList = $guestBook->getData();

  $server_path = str_replace('index.php', '', $_SERVER['PHP_SELF']);
  


  if(isset($_GET['name'])) {
    $guestBook->append(($_GET['name']));
    $guestBook->save();
    header('Location: ./');
  }

  if(isset($_GET['id'])) {
    deleteGuest($_GET['id']);
    header('Location: ./');
  }

?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="index.css">
  <script src="script.js" defer></script>
  <title>guestBook</title>
</head>

<body>
  <div>
    <h2>Гости</h2>
    <ul class='guest__list'>
      <?php 
        foreach($guestList as $key => $guest) {
          ?>
      <li class='guest__list-item'>
        <button class='guest__delete-button' <?php print $key <= 2 ? 'disabled=true' : '' ?>>X</button>
        <p>
          <?php echo $guest; ?>
        </p>
      </li>

      <?php
        }
      ?>
    </ul>
    <div>
      <h3>Добавить гостя</h3>
      <form action="" method='get'>
        <input type="text" name='name' placeholder='name'>
        <button type='submit'>add</button>
      </form>
    </div>


  </div>
</body>

</html>