<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>News</title>
</head>

<body>
  <h1>News</h1>
  <section>
    <?php
        if(isset($_GET['id'])) {
          $news = $this->data['news']->getNews($_GET['id']);
          $news->display(__DIR__ . '/newsItem.php');
        } else {
          foreach($this->data['news']->getAllNews() as $news) {
              $news->display(__DIR__ . '/newsItem.php');
          }
        }
    ?>
  </section>
</body>

</html>