<?php namespace App\Models;

    use CodeIgniter\Model;

    class ProductsModel extends Model
    {
        protected $table = 'products';
        protected $primaryKey = 'product_id';
        protected $allowedFields = ['product_identifier', 'product_name', 'product_price'];

    }


?>