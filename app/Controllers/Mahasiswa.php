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
}
