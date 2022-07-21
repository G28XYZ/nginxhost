<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <title>Product</title>
</head>

<body>
  <h1>Товар "<?php echo $this->product->title ?>"</h1>
  <table class='table table-striped'>
    <tr>
      <th>id</th>
      <th>Наименование</th>
      <th>Цена</th>
    </tr>
    <tr>
      <td><?php echo $this->product->id ?></td>
      <td><?php echo $this->product->title ?></td>
      <td><?php echo $this->product->price ?></td>
    </tr>
  </table>
</body>


</html>
