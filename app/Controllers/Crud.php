<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Crud extends BaseController
{
    protected $db_kampus;

    public function __construct()
    {
        $this->db_kampus = new MahasiswaModel();
    }

    public function index()
    {
        $all = $this->db_kampus->findAll();

        $data = [
            'tb_mahasiswa' => $all
        ];

        return view('crud/view', $data);
    }

    public function tambah()
    {
        if ($this->request->getMethod() == 'post') {
            $data = [
                'nim' => $this->request->getPost('nim'),
                'nama' => $this->request->getPost('nama'),
                'prodi' => $this->request->getPost('prodi'),
                'universitas' => $this->request->getPost('universitas'),
                'no_hp' => $this->request->getPost('no_hp')
            ];

            $this->db_kampus->insert($data);
            return redirect()->to(base_url('/crud'));
        } else {
            return view('crud/upload');
        }
    }

    public function edit($id)
    {
        $data = [
            'edit' => $this->db_kampus->find($id)
        ];

        return view('crud/edit', $data);
    }

    public function editan()
    {
        $nim = $this->request->getPost('nim');
        $data = [
            'nama' => $this->request->getPost('nama'),
            'prodi' => $this->request->getPost('prodi'),
            'universitas' => $this->request->getPost('universitas'),
            'no_hp' => $this->request->getPost('no_hp')
        ];

        $this->db_kampus->update($nim, $data);
        return redirect()->to(base_url('/crud'));
    }

    public function hapus($id)
    {
        $this->db_kampus->delete($id);
        return redirect()->to(base_url('/crud'));
    }
}
