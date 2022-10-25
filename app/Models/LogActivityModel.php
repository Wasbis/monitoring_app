<?php

namespace App\Models;

use CodeIgniter\Model;

class LogActivityModel extends Model
{
    protected $table = 'logactivity';
    protected $primaryKey = 'id_log';
    protected $allowedFields = ['id_ticket', 'problem', 'nip', 'pic', 'status', 'tanggal', 'troubleshooting', 'foto'];

    function cari($katakunci)
    {
        // testkacakunci
        $builder = $this->table("logactivity");
        $arr_katakunci = explode(" ", $katakunci);
        for ($x = 0; $x < count($arr_katakunci); $x++) {
            $builder->orlike('id_ticket', $arr_katakunci[$x]);
            $builder->orlike('problem', $arr_katakunci[$x]);
            $builder->orlike('nip', $arr_katakunci[$x]);
            $builder->orlike('pic', $arr_katakunci[$x]);
            $builder->orlike('status', $arr_katakunci[$x]);
            $builder->orlike('troubleshooting', $arr_katakunci[$x]);
            // $builder->orlike('foto', $arr_katakunci[$x]);
        }
        return $builder;
    }
}
