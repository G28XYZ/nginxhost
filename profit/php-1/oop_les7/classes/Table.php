<?php

require_once __DIR__ . '/Item.php';

class Table extends Item {
  public $legs;
  
  public function show() {
    return 'Im table ' . 'legs - ' . $this->legs . parent::show();
  }
}