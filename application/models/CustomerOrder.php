<?php

namespace application\models;

use application\core\Model;

class CustomerOrder extends Model
{
     protected $table = 'customer_order';

     public function getAll() {
          return $this->db->fetchAssoc('SELECT * FROM ' . $this->table);
     }

     public function getAllByCustomer(int $customerId) {
          return $this->db->fetchAssoc('SELECT orders.* FROM orders INNER JOIN customer_order ON customer_order.orderId=orders.id WHERE customer_order.customerId=' . $customerId);
     }
}