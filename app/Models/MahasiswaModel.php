<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table      = 'mahasiswa';
    protected $allowedFields = ['nama_mahasiswa', 'nim', 'prodi'];
}
