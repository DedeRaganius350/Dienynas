<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TimetableTable extends Migration
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
            ],
            'day' => [
                'type' => 'ENUM',
                'constraint' => [
                    '-',
                    'pirmadienis',
                    'antradienis',
                    'treciadienis',
                    'ketvirtadienis',
                    'penktadienis'
                ],
                'default' => '-'
            ],
            'lessons_count' => [
                'type' => 'ENUM',
                'constraint' => [
                    '-',
                    '1 lesson',
                    '2 lesson',
                    '3 lesson',
                    '4 lesson',
                    '5 lesson',
                    '6 lesson',
                    '7 lesson',
                    '8 lesson'
                ],
                'default' => '-'
            ],
            'lessons_time' => [
                'type' => 'INT',
                'constraint' => 10
            ],
        ];
        $this->forge->addField($columns);
        $this->forge->addKey('id', true);
        $this->forge->createTable('timetable_table');
    }

    public function down()
    {
        $this->forge->dropTable('timetable_table');
    }
}
