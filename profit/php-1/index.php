<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP-1</title>
  <link rel="stylesheet" href="./index.css">
</head>

<body>
  <h1>Привет, PHP</h1>
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
</body>

</html>