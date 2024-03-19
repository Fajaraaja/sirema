<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Mahasiswa extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'           => [
                'type'           => 'INT',
                'constraint'     => 2,
                'unsigned'       => TRUE,
                'auto_increment' => TRUE
            ],
            'nama_mahasiswa'  => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'nim'     => [
                'type'           => 'INT',
                'constraint'     => '12',
                'unique'         => 'true',
            ],
            'prodi' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],

        ]);
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('mahasiswa');
    }

    public function down()
    {
        //
    }
}
