<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class LessonsTable extends Migration
{
    public function up()
    {
        $columns = [
            'id' => [
                'type' => 'INT',
                'constraint' => 10,
                'auto_increment' => true,
            ],
            'lessons' => [
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
        $this->forge->createTable('lessons_table');
    }

    public function down()
    {
        $this->forge->dropTable('lessons_table');
    }
}
