<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class DaftarPengunjung extends BaseController
{
    function __construct()
    {
        $this->model = new \App\Models\DaftarPengunjung();
    }

    public function index()
    {
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Leaflet']),
            'page_title' => view('partials/page-title', ['title' => 'Leaflet', 'li_1' => 'Maps', 'li_2' => 'Leaflet'])
        ];

        $jumlahBaris = 50;
        $katakunci = $this->request->getGet('katakunci');
        if ($katakunci) {
            $pencarian = $this->model->cari($katakunci);
        } else {
            $pencarian = $this->model;
        }
        $data['katakunci'] = $katakunci;
        $data['web'] = $pencarian->orderBy('kode_link', 'ASC')->paginate($jumlahBaris);
        $data['pager'] = $this->model->pager;
        $data['nomor'] = ($this->request->getVar('page') == 1) ? '0' : $this->request->getVar('page');
        return view('pages/daftarpengunjung_view', $data);
    }
}
