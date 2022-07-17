<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <title>Title</title>
</head>

<body>
  <article>
    <p><?php echo $this->getMessage(); ?></p>
    <?php if (!empty($this->getAuthor())) { ?>
    <p style="text-align: right"><?php echo $this->getAuthor(); ?></p>
    <?php } ?>
    <hr>
  </article>

</body>

</html>