<?php

namespace application\controllers;

use application\core\Controller;
use application\models\CustomerOrder;

class CustomersOrdersController extends Controller{

    public function indexAction(){
        if (empty($_GET['id'])) {
            echo 'Customer ID missed.';
            die;
        }
        $customerOrderModel = new CustomerOrder();
        $customerOrders = $customerOrderModel->getAllByCustomer($_GET['id']);
        $this->view->render('Orders Page', ['orders' => $customerOrders]);
    }
    
}