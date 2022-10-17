<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class DataKelola extends BaseController
{
    function __construct()
    {
        $this->model = new \App\Models\DataKelolaModel();
    }

    public function hapus($id_detail)
    {
        $this->model->delete($id_detail);
        return redirect()->to('datakelola');
    }

    public function edit($id_detail)
    {
        return json_encode($this->model->find($id_detail));
    }

    public function simpan()
    {
        $validasi = \Config\Services::validation();
        $aturan = [
            'nama_link' => [
                'label' => 'Nama',
                'rules' => 'required|min_length[3]',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'min_length' => 'Minimum karakter untuk field {field} adalah 5 karakter'
                ]
            ],
        ];

        $validasi->setRules($aturan);
        if ($validasi->withRequest($this->request)->run()) {
            $id_detail = $this->request->getPost('id_detail');
            $nama_link = $this->request->getPost('nama_link');
            $hardware = $this->request->getPost('hardware');
            $software = $this->request->getPost('software');
            $network = $this->request->getPost('network');
            $confidential = $this->request->getPost('confidential');
            $data = [
                'id_detail' => $id_detail,
                'nama_link' => $nama_link,
                'hardware' => $hardware,
                'software' => $software,
                'network' => $network,
                'confidential' => $confidential,

            ];

            $this->model->save($data);

            $hasil['sukses'] = "Data berhasil di simpan";
            $hasil['error'] = true;
        } else {
            $hasil['sukses'] = false;
            $hasil['error'] = $validasi->listErrors();
        }

        return json_encode($hasil);
    }
    public function index()
    {
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Leaflet']),
            'page_title' => view('partials/page-title', ['title' => 'Leaflet', 'li_1' => 'Maps', 'li_2' => 'Leaflet'])
        ];

        $jumlahBaris = 100;
        $katakunci = $this->request->getGet('katakunci');
        if ($katakunci) {
            $pencarian = $this->model->cari($katakunci);
        } else {
            $pencarian = $this->model;
        }
        $data['katakunci'] = $katakunci;
        $data['detail'] = $pencarian->orderBy('id_detail', 'asc')->paginate($jumlahBaris);
        $data['pager'] = $this->model->pager;
        $data['nomor'] = ($this->request->getVar('page') == 1) ? '0' : $this->request->getVar('page');
        return view('pages/detail_view', $data);
    }
}
