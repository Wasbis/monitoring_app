<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class DaftarPengunjung extends BaseController
{
    function __construct()
    {
        $this->model = new \App\Models\DaftarPengunjung();
    }

    public function hapus($kode_link)
    {
        $this->model->delete($kode_link);
        return redirect()->to('daftarpengunjung');
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
                'rules' => 'required|min_length[5]',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'min_length' => 'Minimum karakter untuk field {field} adalah 5 karakter'
                ]
            ],
            'instansi' => [
                'label' => 'instansi',
                'rules' => 'required|min_length[5]',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'min_length' => 'Minimum karakter untuk field {field} adalah 5 karakter'
                ]
            ],
            'keperluan' => [
                'label' => 'keperluan',
                'rules' => 'required|min_length[5]',
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
            $instansi = $this->request->getPost('instansi');
            $keperluan = $this->request->getPost('keperluan');
            $foto = $this->request->getPost('foto');
            $tanggal = $this->request->getPost('tanggal');
            $data = [
                'kode_link' => $kode_link,
                'nama' => $nama,
                'instansi' => $instansi,
                'keperluan' => $keperluan,
                'tanggal' => $tanggal,
                'foto' => $foto,
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
        return view('pages/daftarpengunjung_view', $data);
    }
}


// lama
