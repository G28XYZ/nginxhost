<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <title>Main</title>
</head>

<body>
  <h1>Товары</h1>
  <table class='table table-striped'>
    <tr>
      <th>id</th>
      <th>Наименование</th>
      <th>Цена</th>
    </tr>
    <?php
    foreach($this->products as $product) : ?>
    <tr>
      <td><?php echo $product->id ?></td>
      <td><a href="/?ctrl=Product&id=<?php echo $product->id ?>"><?php echo $product->title ?></a></td>
      <td><?php echo $product->price ?></td>
    </tr>
    <?php endforeach; ?>
  </table>

  <h1>Услуги</h1>
  <table class='table table-striped'>
    <tr>
      <th>id</th>
      <th>Наименование</th>
      <th>Цена</th>
    </tr>
    <?php
    foreach($this->services as $service) : ?>
    <tr>
      <td><?php echo $service->id ?></td>
      <td><?php echo $service->title ?></td>
      <td><?php echo $service->price ?></td>
    </tr>
    <?php endforeach; ?>
  </table>
</body>


</html>