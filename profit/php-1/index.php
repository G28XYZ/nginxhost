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
  <!-- <?php 
    if(isset($_GET['name'])) {
      var_dump($_GET['name']);
    } else {
      echo 'no queries';
    }
  ?> -->

  <?php
    include __DIR__ . '/functions.php';
    // include __DIR__ . '/tableTruth.php';
    // include __DIR__ . '/discriminant.php';
    
    // var_dump(tableTruth('&&', $templateTable));

    // echo sprintf('%s %s', ...[1,2]);
    // $discriminant = (array) discriminant(2,4,2);
    // echo $discriminant['result'];
    // var_dump(assert(0 === $discriminant['discriminant']));

    // $discriminant = (array) discriminant(3,4,2);
    // echo $discriminant['result'];
    // var_dump(assert('Корней нет' === $discriminant['discriminant']));
    
    // $discriminant = (array) discriminant(3,8,2);
    // echo $discriminant['result'];
    // var_dump(assert(40 === $discriminant['discriminant']));
  ?>

  <!-- lesson 3 -->
  <!-- <form action="send.php" method='post'>
    <input type="text" name='user' placeholder='Name'>
    <input type="password" name="password" placeholder='Password'>
    <button type='submit'>send</button>
  </form> -->

  <!-- <?php 
    $operator = $_GET['operator'] ?? null;
    $firstNumber = $_GET['firstNumber'] ?? null;
    $secondNumber = $_GET['secondNumber'] ?? null;
    $result = 'Введите корректные данные';

    if ($operator && is_numeric($firstNumber) && is_numeric($secondNumber)) {
      switch($operator) {
        case '*':
          $result = $firstNumber * $secondNumber;
          break;
        case '/':
          $result = $firstNumber / $secondNumber;
          break;
        case '+':
          $result = $firstNumber + $secondNumber;
          break;
        case '-':
          $result = $firstNumber - $secondNumber;
          break;
      }
    }
  ?>
  <div>
    <h3>Calculator</h3>
    <form action="" method='get'>
      <input type="text" name='firstNumber' placeholder='number' value="<?php echo $firstNumber ?>">
      <input type="text" name='operator' placeholder='operator' value="<?php echo $operator ?>">
      <input type="text" name='secondNumber' placeholder='number' value="<?php echo $secondNumber ?>">
      <span>=</span>
      <span><?php echo $result ?></span>
      </br>
      <button type='submit'>Calc</button>
    </form>
  </div> -->

  <!-- <div>
    Gallery
    <ul>
      <?php 
      include __DIR__ . '/image.php';
      foreach($images as $key=>$image) {
        ?>
      <li>
        <a href="image.php?id=<?php echo $key; ?>">
          <img style="width: 100px" src="<?php echo $image ?>"></img>
        </a>
      </li>
      <?php 
      }
      ?>
    </ul> 
  </div> -->

  <!-- LESSON 4  file-->
  <!-- <?php
  
    $path = __DIR__ . '/text.txt';
    
    // $lines = file_get_contents($path);

    // var_dump($lines);

    $fh = fopen($path, 'w');
    file_put_contents($path, 'Hello, world!');
    $lines = file_get_contents($path);
    
    echo $lines;
    
    var_dump(scandir(__DIR__));
    
    // $fh = fopen($path, 'r');
    
    // while(false !== ($line = fgets($fh))) {
    //   echo $line;
    // }

    fclose($fh);

  ?> -->

  <form action='upload.php' method='post' enctype='multipart/form-data'>
    <input type="file" name="picture">
    <button type='submit'>SEND</button>
  </form>

</body>

</html>