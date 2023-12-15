<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePengeluaranColumn extends Migration
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
            'beasiswa' => [ 
                'type'              => 'INT', 
                'constraint'        => 11,
                'null'              => true,
            ], 
            'orang_tua' => [ 
                'type'              => 'INT', 
                'constraint'        => 11,
                'unsigned'          => true,
            ],
            'upah' => [ 
                'type'              => 'INT', 
                'constraint'        => 11,
                'null'              => true,
            ],
            'bulan' => [ 
                'type'              => 'VARCHAR', 
                'constraint'        => 50,
                'null'              => true,
            ],
            'makan' => [ 
                'type'              => 'INT', 
                'constraint'        => 11,
                'null'              => true,
            ],
            'kos' => [ 
                'type'              => 'INT', 
                'constraint'        => 11,
                'null'              => true,
            ],
            'internet' => [ 
                'type'              => 'INT', 
                'constraint'        => 11,
                'null'              => true,
            ],
            'buku' => [ 
                'type'              => 'INT', 
                'constraint'        => 11,
                'null'              => true,
            ],
            'kursus' => [ 
                'type'              => 'INT', 
                'constraint'        => 11,
                'null'              => true,
            ],
            'lainlain' => [ 
                'type'              => 'INT', 
                'constraint'        => 11,
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
        $this->forge->createTable('pengeluaran'); 
    }

    public function down()
    {
        $this->forge->dropTable('pengeluaran', true); 
    }
}
