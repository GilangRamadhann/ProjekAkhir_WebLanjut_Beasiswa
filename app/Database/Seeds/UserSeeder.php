<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'username' => 'vidya',
                'password' => password_hash('password123', PASSWORD_DEFAULT),
                'email' => 'vidya@gmail.com',
                'name' => 'Vidya Sinta Bilqis',
                'role' => 'admin',
            ],
            [
                'username' => 'gilangramadhan',
                'password' => password_hash('password123', PASSWORD_DEFAULT),
                'email' => 'gilangramadhan@gmail.com',
                'name' => 'Gilang Ramadhan',
                'role' => 'donatur',
            ],
            [
                'username' => 'cely',
                'password' => password_hash('password123', PASSWORD_DEFAULT),
                'email' => 'cely@gmail.com',
                'name' => 'Cely Fabita',
                'role' => 'mahasiswa',
            ],
        ];

        $this->db->table('users')->insertBatch($data);
    }
}
