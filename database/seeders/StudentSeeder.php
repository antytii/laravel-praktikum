<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("students")->insert([
            [
                'name' => 'Siti Hajar',
                'student_id_number' => 'F55123063',
                'email' => 'tii@gmail.com',
                'phone_number' => '081111111111',
                'birth_date' => '2004-03-19',
                'gender' => 'Female',
                'status' => 'Active',
                'major_id' => 1,
            ],
            [
                'name' => 'Liani',
                'student_id_number' => 'F55123009',
                'email' => 'Liani@gmail.com',
                'phone_number' => '085280284736',
                'birth_date' => '2004-07-14',
                'gender' => 'Female',
                'status' => 'Active',
                'major_id' => 2,
            ]
        ]);
    }
}
