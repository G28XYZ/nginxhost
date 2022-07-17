<?php

require_once __DIR__ . '/Upload.php';

class UploadUrl extends Upload {

  public function __construct($nameUploadItem, $pathToFolder)
  {
    parent::__construct($nameUploadItem, $pathToFolder);
  }

  public function isUploaded() {
    if(getimagesize($this->nameUploadItem['picture'])) {
      try {
          if (file_get_contents($this->nameUploadItem['picture'])) {
            return true;
          }
      }catch (Exception $e){
      }
    }
    return false;
  }

  public function upload() {
    file_put_contents(
      $this->pathToFolder . basename($this->nameUploadItem['picture']), file_get_contents($this->nameUploadItem['picture'])
    );
  }

}