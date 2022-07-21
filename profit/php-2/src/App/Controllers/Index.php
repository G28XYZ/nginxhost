<?php

namespace App\Controllers;

use App\Models\Product;
use App\Models\Service;

class Index extends BaseController
{
    public function __invoke() {

        $this->view->products = Product::findAll();
        $this->view->services = Service::findAll();

        $this->view->display(__DIR__ . '/../../Templates/main.php');
    }
}