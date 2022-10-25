<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class LogActivity extends BaseController
{
    function __construct()
    {
        $this->model = new \App\Models\LogActivityModel();
    }

    public function hapus($id_log)
    {
        $this->model->delete($id_log);
        return redirect()->to('logactivity');
    }

    public function edit($id_log)
    {
        return json_encode($this->model->find($id_log));
    }

    public function simpan()
    {
        $validasi = \Config\Services::validation();
        $aturan = [
            'nip' => [
                'label' => 'nip',
                'rules' => 'required|min_length[5]',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'min_length' => 'Minimum karakter untuk field {field} adalah 5 karakter'
                ]
            ],
        ];

        $validasi->setRules($aturan);
        if ($validasi->withRequest($this->request)->run()) {
            $id_log = $this->request->getPost('id_log');
            $id_ticket = $this->request->getPost('id_ticket');
            $problem = $this->request->getPost('problem');
            $nip = $this->request->getPost('nip');
            $pic = $this->request->getPost('pic');
            $status = $this->request->getPost('status');
            $tanggal = $this->request->getPost('tanggal');
            $troubleshooting = $this->request->getPost('troubleshooting');
            $foto = $this->request->getPost('foto');
            $data = [
                'id_log' => $id_log,
                'id_ticket' => $id_ticket,
                'problem' => $problem,
                'nip' => $nip,
                'pic' => $pic,
                'status' => $status,
                'tanggal' => $tanggal,
                'troubleshooting' => $troubleshooting,
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
        $data['web'] = $pencarian->orderBy('id_log', 'asc')->paginate($jumlahBaris);
        $data['pager'] = $this->model->pager;
        $data['nomor'] = ($this->request->getVar('page') == 1) ? '0' : $this->request->getVar('page');
        return view('pages/logActivity_view', $data);
    }
}
