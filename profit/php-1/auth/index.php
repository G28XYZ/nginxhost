<?php
include __DIR__ . '/auth.php';
session_start();
?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="script.js" defer></script>
  <title>Auth</title>
</head>

<body>
  <?php
  $user = [
    'isAuth'=> false
  ];
  $token = $_COOKIE['jwt'] ?? '';
  if($token) {
    $payload = verifyToken($token);
    if(isset($payload['payload'])) {
      $user['name'] = $payload['payload']['name'];
      $user['isAuth'] = true;
    }
  }

  if(isset($_GET['logout'])) {
    setcookie('jwt', '');
    header("Location: ./?login=1");
  }

  ?>
  <?php 
    if($user['isAuth']) {
      ?>
  <button class='auth__logout'>Logout</button>
  <p>Привет <?php echo $user['name'] ?>!</p>

  <?php
    } else {
      ?>
  <?php !($_GET['login'] ?? '') && include './registerForm.php' ?>
  <?php ($_GET['login'] ?? '') && include './loginForm.php' ?>
  <?php
    }
  ?>

</body>

</html>