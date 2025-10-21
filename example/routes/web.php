<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Models\Student;



// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/jobs', function () {
   
    $jobs = Job::all();

    return view('jobs' , [
        'jobs' => $jobs ,
    ]);
});

Route::get('/job/{id}', function ($id) {
     $jobs = Job::all();

   $job = Job::find($id);

   return view('job' , ['job' => $job]);
   
    
});



Route::get('/contact', function () {
    return view('contact');
});



Route::get('/', function () {
    return view('home');
});

Route::get('/students', function () {

    $students = Student::all();

    return view('students', [
        'students' => $students,
    ]);
});

Route::get('/student/{id}', function ($id) {

    $student = Student::find($id);

    return view('student', ['student' => $student]);
});



Route::get('/teachers', function () {
    return view('teachers');
});

Route::get('/users', function () {
    return view('users');
});







