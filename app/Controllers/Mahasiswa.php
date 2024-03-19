<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Mahasiswa extends BaseController
{
    protected $MahasiswaModel;

    public function __construct()
    {
        $this->MahasiswaModel = new MahasiswaModel();
    }

    public function index(): string
    {
        $data = [
            'title' => 'Data Mahasiswa',
            'mahasiswa' => $this->MahasiswaModel->findAll()
        ];
        return view('mahasiswa/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Data Mahasiswa'

        ];
        return view('mahasiswa/create', $data);
    }

    public function save()
    {
        $this->MahasiswaModel->save([
            'nama_mahasiswa' => $this->request->getVar('nama_mahasiswa'),
            'nim' => $this->request->getVar('nim'),
            'prodi' => $this->request->getVar('prodi')
        ]);
        return redirect()->to('/mahasiswa');
    }

    public function delete($id)
    {
        $this->MahasiswaModel->delete($id);

        return redirect()->to('/mahasiswa');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Ubah Data Mahasiswa',
            'mahasiswa' => $this->MahasiswaModel->find($id)

        ];
        return view('mahasiswa/edit', $data);
    }

    public function update($id)
    {
        $this->MahasiswaModel->save([
            'id' => $id,
            'nama_mahasiswa' => $this->request->getVar('nama_mahasiswa'),
            'nim' => $this->request->getVar('nim'),
            'prodi' => $this->request->getVar('prodi')
        ]);
        return redirect()->to('/mahasiswa');
    }
}
