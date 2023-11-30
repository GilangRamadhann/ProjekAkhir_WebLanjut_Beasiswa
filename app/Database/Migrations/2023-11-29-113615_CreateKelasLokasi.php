<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateKelasLokasi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [ 
                'type'              => 'INT', 
                'constraint'        => 10,
                'unsigned'          => true, 
                'auto_increment'    => true, 
            ], 
            'kota' => [ 
                'type'              => 'VARCHAR', 
                'constraint'        => 50,
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
        $this->forge->createTable('lokasi'); 
    }

    public function down()
    {
        $this->forge->dropTable('lokasi', true); 
    }
}
