<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php 
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
  </div>
</body>

</html>