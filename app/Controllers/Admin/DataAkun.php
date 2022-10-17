<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class DataAkun extends BaseController
{
    function __construct()
    {
        $this->model = new \App\Models\DataAkunModel();
    }

    public function hapus($id)
    {
        $this->model->delete($id);
        return redirect()->to('dataakun');
    }

    public function edit($id)
    {
        return json_encode($this->model->find($id));
    }

    public function simpan()
    {
        $validasi = \Config\Services::validation();
        $aturan = [
            'username' => [
                'label' => 'Username',
                'rules' => 'required|min_length[3]',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'min_length' => 'Minimum karakter untuk field {field} adalah 5 karakter'
                ]
            ],
        ];

        $validasi->setRules($aturan);
        if ($validasi->withRequest($this->request)->run()) {
            $id = $this->request->getPost('id');
            $email = $this->request->getPost('email');
            $username = $this->request->getPost('username');
            $password_has = $this->request->getPost('password_has');
            $data = [
                'id' => $id,
                'email' => $email,
                'username' => $username,
                'password_has' => $password_has,
                // 'level' => $level,

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
        $data['akun'] = $pencarian->orderBy('id', 'asc')->paginate($jumlahBaris);
        $data['pager'] = $this->model->pager;
        $data['nomor'] = ($this->request->getVar('page') == 1) ? '0' : $this->request->getVar('page');
        return view('pages/dataAkun_view', $data);
    }
}
