<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Createjurusantable extends Migration
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
            'jurusan' => [ 
                'type'              => 'VARCHAR', 
                'constraint'        => 255,
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
        $this->forge->createTable('jurusan'); 
    }

    public function down()
    {
        $this->forge->dropTable('jurusan', true);
    }
}
