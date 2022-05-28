<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class StudentsTable extends Migration
{
    public function up()
    {
        $columns = [
            'id' => [
                'type' => 'INT',
                'constraint' => 10,
                'auto_increment' => true
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => '30'
            ],
            'age' => [
                'type' => 'INT',
                'constraint' => 10
            ],
            'gender' => [
                'type' => 'ENUM',
                'constraint' => [
                    '-',
                    'male',
                    'female'
                ],
                'default' => '-'
            ]
        ];
        $this->forge->addField($columns);
        $this->forge->addKey('id', true);
        $this->forge->createTable('students_table');
    }

    public function down()
    {
        $this->forge->dropTable('students_table');
    }
}
