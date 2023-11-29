<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDonaturTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [ 
                'type'              => 'INT', 
                'constraint'        => 20,
                'unsigned'          => true, 
                'auto_increment'    => true, 
            ], 
            'id_user' => [ 
                'type'              => 'INT', 
                'constraint'        => 11,
                'unsigned'          => true, 
            ], 
            'deskripsi' => [ 
                'type'              => 'TEXT', 
                'constraint'        => 6.5535,
            ], 
            'no_telp' => [ 
                'type'              => 'VARCHAR', 
                'constraint'        => 13,
            ], 
            'status' => [ 
                'type'              => 'VARCHAR', 
                'constraint'        => 10,
            ], 
            'logo' => [ 
                'type'              => 'VARCHAR', 
                'constraint'        => 255,
                'null'              => true,
            ], 
            'alamat' => [ 
                'type'              => 'VARCHAR', 
                'constraint'        => 255,
            ], 
            'id_lokasi' => [ 
                'type'              => 'INT', 
                'constraint'        => 10,
                'unsigned'          => true, 
            ], 
            'instagram' => [ 
                'type'              => 'VARCHAR', 
                'constraint'        => 50,
                'null'              => true,
            ], 
            'facebook' => [ 
                'type'              => 'VARCHAR', 
                'constraint'        => 50,
                'null'              => true,
            ], 
            'created_at' => [ 
                'type'              => 'DATETIME', 
                'null'              => true,
            ],
            'updated_at' => [ 
                'type'              => 'DATETIME', 
                'null'              => true,
            ],
            'deleted_at' => [ 
                'type'              => 'DATETIME', 
                'null'              => true,
            ],
        ]); 

        $this->forge->addKey('id', true, true);
        $this->forge->addForeignKey('id_user','users', 'id');
        $this->forge->addForeignKey('id_lokasi','lokasi', 'id');
        $this->forge->createTable('donatur'); 
    }

    public function down()
    {
        $this->forge->dropTable('donatur', true); 
    }
}
