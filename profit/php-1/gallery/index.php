<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gallery</title>
</head>

<body>

  <div>
    Gallery
    <ul>
      <?php 
      $images = glob('./images' . "/*.{png,jpeg,jpg}", GLOB_BRACE);

      foreach($images as $key => $image) {
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

    <form action="upload.php" method="post" enctype='multipart/form-data'>
      <input type="text" name='url' placeholder="url image">
      <button type='submit'>ADD FROM URL</button>
    </form>

    <form action="upload.php" method="post" enctype='multipart/form-data'>
      <input type="file" name="picture">
      <button type='submit'>ADD FROM PC</button>
    </form>
  </div>

</body>

</html>