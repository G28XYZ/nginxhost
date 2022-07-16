<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="index.css">
  <title>Document</title>
</head>

<body>
  <?php 
    if(isset($_GET['name'])) {
      var_dump($_GET['name']);
    } else {
      echo 'no queries';
    }
  ?>

  <?php
    include __DIR__ . '/functions.php';
    include __DIR__ . '/tableTruth.php';
    include __DIR__ . '/discriminant.php';
    
    var_dump(tableTruth('&&', $templateTable));

    echo sprintf('%s %s', ...[1,2]);
    $discriminant = (array) discriminant(2,4,2);
    echo $discriminant['result'];
    var_dump(assert(0 === $discriminant['discriminant']));

    $discriminant = (array) discriminant(3,4,2);
    echo $discriminant['result'];
    var_dump(assert('Корней нет' === $discriminant['discriminant']));
    
    $discriminant = (array) discriminant(3,8,2);
    echo $discriminant['result'];
    var_dump(assert(40 === $discriminant['discriminant']));
  ?>

  <!-- lesson 3 -->
  <form action="send.php" method='post'>
    <input type="text" name='user' placeholder='Name'>
    <input type="password" name="password" placeholder='Password'>
    <button type='submit'>send</button>
  </form>
</body>

</html>