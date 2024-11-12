<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateAdminTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => false,
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => false,
                'unique' => true,
            ],
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => false,
                'unique' => true,
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false,
            ],
            'level' => [
                'type' => 'ENUM',
                'constraint' => ['1', '2', '3', '4', '5'],
                'default' => '1',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => false,
                'default' => date('Y-m-d H:i:s'),
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('admins');
    }

    public function down()
    {
        $this->forge->dropTable('admins');
    }
}
