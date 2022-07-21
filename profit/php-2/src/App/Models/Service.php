<?php

namespace App\Models;
use App\Model;

class Service extends Model implements HasPriceInterface
{

    use HasPriceTrait;

    protected const TABLE = 'services';

    public string $title;

}