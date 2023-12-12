<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateBeswanTable extends Migration
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
            'npm' => [ 
                'type'              => 'VARCHAR', 
                'constraint'        => 20,
                'null'              => true,
            ], 
            'id_jurusan' => [ 
                'type'              => 'INT', 
                'constraint'        => 11,
                'unsigned'          => true,
            ], 
            'id_fakultas' => [ 
                'type'              => 'INT', 
                'constraint'        => 11,
                'unsigned'          => true,
            ], 
            'id_univ' => [ 
                'type'              => 'INT', 
                'constraint'        => 11,
                'unsigned'          => true,
            ], 
            'akt' => [ 
                'type'              => 'YEAR', 
                'unsigned'          => true,
                'null'              => true,
            ],
            'agama' => [ 
                'type'              => 'VARCHAR', 
                'constraint'        => 50,
                'null'              => true,
            ],
            'tgl_lahir' => [ 
                'type'              => 'DATE', 
                'null'              => true,
            ],
            'no_telp' => [ 
                'type'              => 'VARCHAR', 
                'constraint'        => 13,
                'null'              => true,
            ],
            'foto' => [ 
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
        $this->forge->addForeignKey('id_jurusan','jurusan','id','CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_fakultas','fakultas','id','CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_univ','jurusan','id','CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_lokasi','lokasi','id','CASCADE', 'CASCADE');
        $this->forge->createTable('beswan'); 
    }

    public function down()
    {
        $this->forge->dropTable('beswan', true); 
    }
}
