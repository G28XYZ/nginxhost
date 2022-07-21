<?php

namespace Controllers;

use Models\Product;
use Models\Service;

class Index extends BaseController
{
    public function __invoke() {

        $this->view->products = Product::findAll();
        $this->view->services = Service::findAll();

        $this->view->display(__DIR__ . '/../Templates/main.php');
    }
}