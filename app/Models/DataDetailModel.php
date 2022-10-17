<?php

namespace App\Models;

use CodeIgniter\Model;

class DataDetailModel extends Model
{
    protected $table = 'link';
    protected $primaryKey = 'kode_link';
    protected $allowedFields = ['nama', 'domain', 'ip', 'tanggal', 'status'];

    function cari($katakunci)
    {
        // testkacakunci
        $builder = $this->table("link");
        $arr_katakunci = explode(" ", $katakunci);
        for ($x = 0; $x < count($arr_katakunci); $x++) {
            $builder->orlike('nama', $arr_katakunci[$x]);
            $builder->orlike('domain', $arr_katakunci[$x]);
            $builder->orlike('ip', $arr_katakunci[$x]);
        }
        return $builder;
    }

    public function get_detail()
    {
        $builder = $this->table("link");
    }
}
