<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs', function () {
   
    $jobs = [
        [
            'id' => 1 ,
             'title' => "Director" ,
             'salary' => '50.000$'
        ] ,
        [
             'id' => 2 ,
            'title' => "Programmer" ,
             'salary' => '30.000$'

        ] , 
        [
             'id' => 3 ,
            'title' => "Teacher" ,
             'salary' => '40.000$'

        ]
        
    ];
    return view('jobs' , [
        'jobs' => $jobs ,
    ]);
});

Route::get('/job/{id}', function ($id) {
     $jobs = [
        [
            'id' => 1 ,
             'title' => "Director" ,
             'salary' => '50.000$'
        ] ,
        [
             'id' => 2 ,
            'title' => "Programmer" ,
             'salary' => '30.000$'

        ] , 
        [
             'id' => 3 ,
            'title' => "Teacher" ,
             'salary' => '40.000$'

        ]
        
    ];

    foreach ($jobs as $job) {
        if ($job['id'] == $id){
            return view ('job' , [
                'job' => $job ,
            ]);
        }

    }
   
    
});



Route::get('/contact', function () {
    return view('contact');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/students', function () {
    return view('students');
});

Route::get('/teachers', function () {
    return view('teachers');
});

Route::get('/users', function () {
    return view('users');
});