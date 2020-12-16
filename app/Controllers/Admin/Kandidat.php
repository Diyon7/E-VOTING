<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\KandidatModel;
use Config\Services;

class Kandidat extends BaseController
{
    protected $KandidatModel;

    public function __construct()
    {
        $this->KandidatModel = new KandidatModel();
    }

    public function index()
    {
        $data = [
            'judula' => 'Admin  Kandidat',
            'judul' => 'Kandidat',
            'sidebar' => 'kandidat',
            'kandidat' => $this->KandidatModel->findAll()
        ];
        return view('admin/kandidat/kandidat', $data);
    }

    public function tambahKandidat()
    {
        $data = [
            'judula' => 'Admin  Kandidat',
            'judul' => 'Kandidat',
            'sidebar' => 'kandidat',
            'validation' => \Config\Services::validation()
        ];

        if ($this->request->getMethod() == 'post') {
            $rules = [
                'nama' => [
                    'label' => 'nama',
                    'rules' => 'required|alpha_space|min_length[3]',
                    'errors' => [
                        'required' => 'nama Harus diisi',
                        'alpha_space' => '',
                        'min_length' => 'Minimal masukkan tiga angka'
                    ]
                ],
                'visi' => [
                    'label' => 'visi',
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'visi Harus diisi'
                    ]
                ],
                'misi' => [
                    'label' => 'misi',
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'misi Harus diisi'
                    ]
                ],
                'fotokandidat' => [
                    'rules' => 'uploaded[fotokandidat]|mime_in[fotokandidat,image/jpg,image/jpeg,image/png]is_image[fotokandidat]|max_size[fotokandidat,2096]',
                    'errors' => [
                        'uploaded' => 'pilih gambar terlebih dahulu',
                        'max_size' => 'Gambar maksimal ukuran 2MB',
                        'is_image' => 'Yang anda masukkan bukan gambar',
                        'mime_in' => 'Yang anda masukkan bukan gambar'
                    ]
                ],
            ];
            if ($this->validate($rules)) {

                $filefoto = $this->request->getFile('fotokandidat');

                $uploadfoto = $this->uploadFoto($filefoto);

                if ($uploadfoto) {
                    $params = [
                        'nama_calon' => htmlspecialchars($this->request->getPost('nama')),
                        'visi' => $this->request->getPost('visi'),
                        'misi' => $this->request->getPost('misi'),
                        'foto' => $uploadfoto
                    ];
                    $simpan = $this->KandidatModel->insert($params);
                    if ($simpan) {
                        session()->setFlashdata('success', 'Data berhasil ditambahkan');
                        return redirect()->route('kandidat');
                    } else {
                        session()->setFlashdata('error', 'Data tidak berhasil ditambahkan');
                        return redirect()->route('admin/kandidat/tambahKandidat')->withInput();
                    }
                }
            } else {
                $data['validation'] = $this->validator;
            }
        }
        return view('admin/kandidat/tambahKandidat', $data);
    }

    private function uploadFoto($filefoto)
    {
        $namabaru = $filefoto->getRandomName();
        $upload = $filefoto->move(ROOTPATH . 'public/assets/foto', $namabaru);

        if ($upload) {
            return $namabaru;
        } else {
            return false;
        }
    }
}
