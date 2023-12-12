<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDonaturColumn extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [ 
                'type'              => 'INT', 
                'constraint'        => 11,
                'unsigned'          => true, 
                'auto_increment'    => true, 
            ], 
            'id_user' => [ 
                'type'              => 'INT', 
                'constraint'        => 11,
                'unsigned'          => true, 
            ], 
            'nama' => [ 
                'type'              => 'VARCHAR', 
                'constraint'        => 255,
                'null'              => true,
            ],
            'deskripsi' => [ 
                'type'              => 'TEXT', 
                'constraint'        => 6.5535,
                'null'              => true,
            ], 
            'no_telp' => [ 
                'type'              => 'VARCHAR', 
                'constraint'        => 13,
                'null'              => true,
            ],
            'logo' => [ 
                'type'              => 'VARCHAR', 
                'constraint'        => 255,
                'null'              => true,
            ], 
            'alamat' => [ 
                'type'              => 'VARCHAR', 
                'constraint'        => 255,
                'null'              => true,
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
        $this->forge->addForeignKey('id_user','users','id','CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_lokasi','lokasi','id','CASCADE', 'CASCADE');
        $this->forge->createTable('donatur'); 
    }

    public function down()
    {
        $this->forge->dropTable('donatur', true); 
    }
}
