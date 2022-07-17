<?php
require_once __DIR__ . '/TextFile.php';

class GuestBook extends TextFile {
  protected $guestList = [];

  public function __construct($pathToFile)
  {
    parent::__construct($pathToFile);
    
    $fh = fopen($this->pathToFile, 'r');  
    while(false !== ($line = fgets($fh))) {
      $this->guestList[] = $line;
    }
    fclose($fh);
  }

  public function getData() {
    return $this->guestList;
  }

  public function append($text) {
    $this->guestList[] = $text;
  }

  public function save() {
    file_put_contents($this->pathToFile, implode("\r\n", $this->guestList));
  }
}