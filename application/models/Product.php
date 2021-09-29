<?php 
namespace application\models;

use application\core\Model;

class Product extends Model
{
    protected $table = 'products';

     public function getAll() {
          return $this->db->fetchAssoc('SELECT * FROM ' . $this->table);
     }

     public function getAllWithUser() {
          return $this->db->fetchAssoc('SELECT p.*, u.firstName as userFirstName, u.secondName as userSecondName FROM `products` as p left join users as u on u.id = p.userID');
     }
}