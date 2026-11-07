<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userTeacherEmail = 'ricad@ski.sch.id';
        $userStudentEmail = 'grachia@ski.sch.id';

        //User Teacher
        User::updateCreate(
            ['email' => $userTeacherEmail],
            [
                'name' => 'Richard',
                'password' => bcrypt('password'),
                'role' => 'teacher'
            ]
        );

        //User Student
        User::updateCreate(
            ['email' => $userStudentEmail],
            [
                'name' => 'Grachia',
                'password' => bcrypt('password'),
                'role' => 'student'
            ]
        );
    }
}
