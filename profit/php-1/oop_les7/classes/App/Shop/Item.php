<?php

namespace App\Shop;

class Item {
  protected $price;
  public $color;

  public function __construct($price) {
    $this->price = $price;
  }

  public function show() {
    return 'Iam cost ' . $this->price;
  }

  public function setPrice($price) {
    if($price < 0) {
      echo 'ERROR';
      die;
    }
    $this->price = $price;
  }
}