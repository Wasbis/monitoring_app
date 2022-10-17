<?php

namespace App\Models;

use CodeIgniter\Model;

class DataAkunModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['email', 'username', 'password_has'];

    function cari($katakunci)
    {
        // testkacakunci
        $builder = $this->table("users");
        $arr_katakunci = explode(" ", $katakunci);
        for ($x = 0; $x < count($arr_katakunci); $x++) {
            $builder->orlike('username', $arr_katakunci[$x]);
        }
        return $builder;
    }
}
