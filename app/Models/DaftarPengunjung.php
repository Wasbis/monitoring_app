<?php

namespace App\Models;

use CodeIgniter\Model;

class DaftarPengunjung extends Model
{
    protected $table = 'pengunjung';
    protected $primaryKey = 'kode_link';
    protected $allowedFields = ['nama','instansi', 'keperluan','foto', 'tanggal'];

    function cari($katakunci)
    {
        // testkacakunci
        $builder = $this->table("pengunjung");
        $arr_katakunci = explode(" ", $katakunci);
        for ($x = 0; $x < count($arr_katakunci); $x++) {
            $builder->orlike('nama', $arr_katakunci[$x]);
            $builder->orlike('instansi', $arr_katakunci[$x]);
            $builder->orlike('keperluan', $arr_katakunci[$x]);
            $builder->orlike('foto', $arr_katakunci[$x]);
            $builder->orlike('tanggal', $arr_katakunci[$x]);
        }
        return $builder;
    }
}
