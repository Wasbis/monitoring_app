<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class DataWeb extends BaseController
{
    function __construct()
    {
        $this->model = new \App\Models\DataWebModel();
    }

    public function hapus($kode_link)
    {
        $this->model->delete($kode_link);
        return redirect()->to('dataweb');
    }

    public function edit($kode_link)
    {
        return json_encode($this->model->find($kode_link));
    }

    public function simpan()
    {
        $validasi = \Config\Services::validation();
        $aturan = [
            'nama' => [
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
            $kode_link = $this->request->getPost('kode_link');
            $nama = $this->request->getPost('nama');
            $domain = $this->request->getPost('domain');
            $ip = $this->request->getPost('ip');
            $tanggal = $this->request->getPost('tanggal');
            $status = $this->request->getPost('status');
            $data = [
                'kode_link' => $kode_link,
                'nama' => $nama,
                'domain' => $domain,
                'ip' => $ip,
                'tanggal' => $tanggal,
                'status' => $status,

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
        $data['web'] = $pencarian->orderBy('kode_link', 'asc')->paginate($jumlahBaris);
        $data['pager'] = $this->model->pager;
        $data['nomor'] = ($this->request->getVar('page') == 1) ? '0' : $this->request->getVar('page');
        return view('pages/dataWeb_view', $data);
    }
}
