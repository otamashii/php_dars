<?php
namespace App\Models;

class Student{
    public static function all(){
        return [
            [
                'id' => 2314024,
                'name' => 'Shoxrux',
                'lastname' => 'Raxmonberdiyev'
            ],
            [
                'id' => 2313039,
                'name' => 'Alimardon',
                'lastname' => 'Tojimurodov'
            ],
            [
                'id' => 2313123,
                'name' => 'Maksim',
                'lastname' => 'Jumabaev'
            ],
            [
                'id' => 2313933,
                'name' => 'Zuxra',
                'lastname' => 'Alibekova'
            ],
            [
                'id' => 2312136,
                'name' => 'Asomiddin',
                'lastname' => 'Qarshiyev '
            ],
        ];
    }

    
    public static function find(int $id){
        $students = Student::all();
        $foundStudent = null;

        foreach ($students as $student) {
            if ($student['id'] == $id) {
                $foundStudent = $student;
                break;
            }
        }

        if (!$foundStudent) {
            return abort(404, 'Student not found');
        }

        return $foundStudent;
    }
}
