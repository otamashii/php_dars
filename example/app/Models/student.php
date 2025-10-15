<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model{
use HasFactory;

    // Jadval nomi (ixtiyoriy, Laravel avtomatik "students" deb oladi)
    protected $table = 'students';

    // Mass assignment uchun ruxsat etilgan ustunlar
    protected $fillable = [
        'name',
        'lastname',
    ];

    // public static function all(){
    //     return [
    //         [
    //             'id' => 2314024,
    //             'name' => 'Shoxrux',
    //             'lastname' => 'Raxmonberdiyev'
    //         ],
    //         [
    //             'id' => 2313039,
    //             'name' => 'Alimardon',
    //             'lastname' => 'Tojimurodov'
    //         ],
    //         [
    //             'id' => 2313123,
    //             'name' => 'Maksim',
    //             'lastname' => 'Jumabaev'
    //         ],
    //         [
    //             'id' => 2313933,
    //             'name' => 'Zuxra',
    //             'lastname' => 'Alibekova'
    //         ],
    //         [
    //             'id' => 2312136,
    //             'name' => 'Asomiddin',
    //             'lastname' => 'Qarshiyev '
    //         ],
    //     ];
    // }

    
    // public static function find(int $id){
    //     $students = Student::all();
    //     $foundStudent = null;

    //     foreach ($students as $student) {
    //         if ($student['id'] == $id) {
    //             $foundStudent = $student;
    //             break;
    //         }
    //     }

    //     if (!$foundStudent) {
    //         return abort(404, 'Student not found');
    //     }

    //     return $foundStudent;
    // }

}
