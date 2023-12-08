<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Createuniversitastable extends Migration
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
            'universitas' => [ 
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
        $this->forge->createTable('universitas'); 
    }

    public function down()
    {
        $this->forge->dropTable('universitas', true);
    }
}
