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
                'password' => 'password1',
                'level'    => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => null,
            ],
            [
                'name'     => 'Mahasiswa 2',
                'username' => 'user2',
                'email'    => 'user2@ci.dev',
                'password' => 'password2',
                'level'    => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => null,
            ],
            [
                'name'     => 'Mahasiswa 3',
                'username' => 'user3',
                'email'    => 'user3@ci.dev',
                'password' => 'password3',
                'level'    => '3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => null,
            ],
            [
                'name'     => 'Mahasiswa 4',
                'username' => 'user4',
                'email'    => 'user4@ci.dev',
                'password' => 'password4',
                'level'    => '4',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => null,
            ],
            [
                'name'     => 'Mahasiswa 5',
                'username' => 'user5',
                'email'    => 'user5@ci.dev',
                'password' => 'password5',
                'level'    => '5',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => null,
            ],
        ];

        // Using Query Builder
        $this->db->table('admins')->insertBatch($data);
    }
}
