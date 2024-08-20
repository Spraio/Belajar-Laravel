<?php

use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement('
        create view viewstudents as
        select students.id as id, students.name as nama_murid, students.gender, students.nim, class.name as nama_kelas
        from students join class 
        on students.class_id = class.id;
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('drop view viewstudents');
    }
};
