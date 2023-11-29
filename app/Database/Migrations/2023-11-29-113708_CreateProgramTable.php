<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProgramTable extends Migration
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
            'nama' => [ 
                'type'              => 'VARCHAR', 
                'constraint'        => 255,
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
            'ketentuan' => [ 
                'type'              => 'TEXT', 
                'constraint'        => 6.5535,
            ],
            'syarat' => [ 
                'type'              => 'TEXT', 
                'constraint'        => 6.5535,
            ],
            'no_telp' => [ 
                'type'              => 'VARCHAR', 
                'constraint'        => 13,
            ], 
            'tgl_buka' => [ 
                'type'              => 'DATE', 
                'null'              => true,
            ],
            'tgl_tutup' => [ 
                'type'              => 'DATE', 
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
        $this->forge->createTable('program'); 
    }

    public function down()
    {
        $this->forge->dropTable('program', true); 
    }
}
