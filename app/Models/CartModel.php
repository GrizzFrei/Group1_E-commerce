<?php namespace App\Models;

    use CodeIgniter\Model;

    class CartModel extends Model
    {
        protected $table = 'cart';
        protected $primaryKey = 'cart_id';
        protected $allowedFields = ['product_id', 'user_id', 'product_identifier', 'product_name', 'product_price'];

    }


?>