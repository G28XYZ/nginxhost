<?php

$message = '';

if(isset($_POST['name']) && isset($_POST['password'])) {
    $res = login($_POST['name'], $_POST['password']);
    if(isset($res['token'])) {
      setcookie('jwt', $res['token'], time() + 60);
      header("Location: ./");
    } else {
      $message = $res['message'];
    }
}

?>

<h2>Login user</h2>
<form action='' method='post' name='login'>
  <p><?php echo $message ?? '' ?></p>
  <input type="text" name="name" placeholder="name" value="<?php echo $_POST['name'] ?? '' ?>">
  <input type="password" name="password" placeholder="password" value="<?php echo $_POST['password'] ?? '' ?>">
  <button type="submit">Login</button>
</form>
<p>
  Not register?
  <a href="./">Register</a>
</p>