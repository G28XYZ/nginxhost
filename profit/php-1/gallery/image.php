<?php

$images = glob('./images' . "/*.{png,jpeg,jpg}", GLOB_BRACE);


if(isset($_GET['id'])) {
  ?>
<img src="<?php echo $images[$_GET['id']] ?>" alt="">
<?php
}