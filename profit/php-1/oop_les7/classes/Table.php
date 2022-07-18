<?php


class Table extends Item {
  public $legs;
  
  public function show() {
    return 'Im table ' . 'legs - ' . $this->legs . parent::show();
  }
}