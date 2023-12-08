<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Createfakultasstable extends Migration
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
            'fakultas' => [ 
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
        $this->forge->createTable('fakultas'); 
    }

    public function down()
    {
        $this->forge->dropTable('fakultas', true);
    }
}
