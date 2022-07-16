<?php 
  // header('Set-Cookie: foo=24')
  // setcookie('foo', 24, time() + 86400);
  session_start();
?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Test</title>
</head>


<body>
  <a href="./">index</a>
  <?php 
  $count = $_SESSION['count'] ?? 0;
  $count++;
  $_SESSION['count'] = $count;
  ?>
  <h2><?php echo $count ?></h2>

</body>

</html>