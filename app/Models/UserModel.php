<?php namespace App\Models;

    use CodeIgniter\Model;

    class UserModel extends Model
    {
        protected $table = 'users';
        protected $primaryKey = 'user_id';
        protected $allowedFields = ['username', 'email', 'pass', 'fName', 'lName', 'age', 'gender', 'cNum', 'street', 'city', 'zCode'];

    }


?>