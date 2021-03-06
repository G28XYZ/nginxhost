<?php

namespace App\Shop;

class Cabinet extends Item {
  public $doors;

  public function __construct($price, $doors) {
    $this->doors = $doors;
    parent::__construct($price);
  }

  public function show() {
    return 'Im cabinet, doors - ' . $this->doors . parent::show();
  }
}