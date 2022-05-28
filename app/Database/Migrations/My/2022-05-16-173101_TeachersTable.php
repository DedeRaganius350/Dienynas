<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TeachersTable extends Migration
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
            'teacher_area' => [
                'type' => 'ENUM',
                'constraint' => [
                    '-',
                    'lietuviu_kalba',
                    'matematika',
                    'fizika',
                    'chemija',
                    'anglu_kalba',
                    'kuno_kultura',
                    'tikyba',
                    'rusu_kalba',
                ],
                'default' => '-'
            ]
        ];
        $this->forge->addField($columns);
        $this->forge->addKey('id', true);
        $this->forge->createTable('teachers_table');
    }

    public function down()
    {
        $this->forge->dropTable('teachers_table');
    }
}
