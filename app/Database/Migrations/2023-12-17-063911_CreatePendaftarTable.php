<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePendaftarTable extends Migration
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
            'id_beswan' => [ 
                'type'              => 'INT', 
                'constraint'        => 11,
                'unsigned'          => true, 
            ],
            'id_program' => [ 
                'type'              => 'INT', 
                'constraint'        => 11,
                'unsigned'          => true, 
            ], 
            'status' => [ 
                'type'              => 'VARCHAR', 
                'constraint'        => 20,
                'null'              => true,
            ],
            'id_univ' => [ 
                'type'              => 'INT', 
                'constraint'        => 11,
                'unsigned'          => true, 
            ],
            'berkas' => [ 
                'type'              => 'VARCHAR', 
                'constraint'        => 255,
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
        $this->forge->addForeignKey('id_beswan','beswan','id','CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_program','program','id','CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_univ','universitas','id','CASCADE', 'CASCADE');
        $this->forge->createTable('daftar_terima'); 
    }

    public function down()
    {
        $this->forge->dropTable('daftar_terima', true); 
    }
}
