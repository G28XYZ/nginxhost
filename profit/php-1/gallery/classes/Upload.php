<?php

class Upload {
  protected $nameUploadItem;
  protected $pathToFolder;

  public function __construct($nameUploadItem, $pathToFolder)
  {
    $this->nameUploadItem = $nameUploadItem;
    $this->pathToFolder = $pathToFolder;
  }
  
  public function isUploaded() {
    if(isset($this->nameUploadItem['picture'])) {
        if(0 == $this->nameUploadItem['picture']['error']) {
          if(preg_match('/(jpeg|png|jpg)/', $this->nameUploadItem['picture']['type'])) {
            return true;
          }
        }
    }
    // header('Location: ./');
    return false;
  }

  public function upload() {
    move_uploaded_file(
      $this->nameUploadItem['picture']['tmp_name'],
      $this->pathToFolder . $this->nameUploadItem['picture']['name']
    );
  }
  
}