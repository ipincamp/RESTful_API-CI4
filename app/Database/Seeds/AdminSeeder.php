<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name'     => 'Mahasiswa 1',
                'username' => 'user1',
                'email'    => 'user1@ci.dev',
                'password' => password_hash('password1', PASSWORD_DEFAULT),
                'level'    => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name'     => 'Mahasiswa 2',
                'username' => 'user2',
                'email'    => 'user2@ci.dev',
                'password' => password_hash('password2', PASSWORD_DEFAULT),
                'level'    => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name'     => 'Mahasiswa 3',
                'username' => 'user3',
                'email'    => 'user3@ci.dev',
                'password' => password_hash('password3', PASSWORD_DEFAULT),
                'level'    => '3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name'     => 'Mahasiswa 4',
                'username' => 'user4',
                'email'    => 'user4@ci.dev',
                'password' => password_hash('password4', PASSWORD_DEFAULT),
                'level'    => '4',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name'     => 'Mahasiswa 5',
                'username' => 'user5',
                'email'    => 'user5@ci.dev',
                'password' => password_hash('password5', PASSWORD_DEFAULT),
                'level'    => '5',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];

        // Using Query Builder
        $this->db->table('admins')->insertBatch($data);
    }
}
