<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CommentsTable extends Migration
{
    public function up()
    {
        $columns = [
            'id' => [
                'type' => 'INT',
                'constraint' => 10,
                'auto_increment' => true,
            ],
            'teacher_id' => [
                'name' => [
                    'type' => 'VARCHAR',
                    'constraint' => '30'
                ],
            ],
            'student_id' => [
                'name' => [
                    'type' => 'VARCHAR',
                    'constraint' => '30'
                ],
            ],
            'lesson_id' => [

            ],
            'comment' => [

            ],
            'data' => [

            ],
        ];
        $this->forge->addField($columns);
        $this->forge->addKey('id', true);
        $this->forge->createTable('timetable_table');
    }

    public function down()
    {
        //
    }
}
