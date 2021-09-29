<?php

namespace application\controllers;

use application\core\Controller;
use application\models\Product;

class ProductsController extends Controller{
    public function indexAction(){
        $userModel = new Product();
        $productsWithUser = $userModel->getAllWithUser();
         $this->view->render('Products Page', ['products' => $productsWithUser]);
    }
}