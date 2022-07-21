<?php

namespace Controllers;


class Product extends BaseController
{
    public function __invoke() {

        $this->view->product = \Models\Product::findById($_GET['id'])[0];

        $this->view->display(__DIR__ . '/../Templates/product.php');
    }

    protected function access(): bool {
        return true;
    }
}