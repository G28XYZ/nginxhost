<?php

namespace Models;

class Product extends \Model implements HasPrice
{

    protected const TABLE = 'products';

    public string $title;
    public int $price;

    public function getPrice(): int {
        return $this->price;
    }

}