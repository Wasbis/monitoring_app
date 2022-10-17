<?php

namespace App\Models;

use CodeIgniter\Model;

class DataKelolaModel extends Model
{
    protected $table = 'details';
    protected $primaryKey = 'id_detail';
    protected $allowedFields = ['nama_link', 'hardware', 'software', 'network', 'confidential'];

    function cari($katakunci)
    {
        // KATAKUNCI
        $builder = $this->table("details");
        $arr_katakunci = explode(" ", $katakunci);
        for ($x = 0; $x < count($arr_katakunci); $x++) {
            $builder->orlike('nama_link', $arr_katakunci[$x]);
        }
        return $builder;
    }
}
