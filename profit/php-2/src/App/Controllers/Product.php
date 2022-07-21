<?php

namespace App\Controllers;

use App\Models\Product as ProductModel;
use App\Exceptions\NotFound;

class Product extends BaseController
{
    public function __invoke() {

        $this->view->product = ProductModel::findById($_GET['id']);
        if(empty($this->view->product)) {
            throw new NotFound();
        }
        $this->view->display(__DIR__ . '/../../Templates/product.php');
    }

    protected function access(): bool {
        return true;
    }
}
