<?php

$isRegister = false;

if(isset($_POST['name']) && isset($_POST['password'])) {
  $users = getUserList();
  foreach($users as $user) {
    if($user->name === $_POST['name']) {
      $isRegister = true;
    }
  }
  if($isRegister === false) {
    createUser($_POST);
    header("Location: ./?login=1");
  }
}

?>

<h2>Register user</h2>
<form action="" method="post">
  <p><?php echo $isRegister ? ($_POST['name'] ?? '') . ' - пользователь существует' : '' ?></p>
  <input type="text" name="name" placeholder="name" value="<?php echo $_POST['name'] ?? '' ?>">
  <input type="password" name="password" placeholder="password" value="<?php echo $_POST['password'] ?? '' ?>">
  <button type="submit">Register</button>
</form>
<p>
  Register?
  <a href="./?login=1">Login</a>
</p>