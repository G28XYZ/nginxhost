<?php


if(isset($_FILES['picture'])) {
  if(0 == $_FILES['picture']['error']) {
    var_dump($_FILES['picture']);
    if(preg_match('/(jpeg|png)/', $_FILES['picture']['type'])) {
        move_uploaded_file(
          $_FILES['picture']['tmp_name'],
          __DIR__ . '/images/' . $_FILES['picture']['name']
      );
    }
  }
}

if(isset($_POST['url'])) {
  $url = $_POST['url'];
  if(getimagesize($_POST['url'])) {
    $name = basename($url);
    try {
        $files = file_get_contents($url);
        if ($files) {
            file_put_contents(__DIR__ . "/images/$name", $files);
        }
    }catch (Exception $e){
    }
  }
}

header('Location: ' . $_SERVER['HTTP_REFERER']);