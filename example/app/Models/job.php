<?php
namespace App\Models;

class Job{
    public static function all(){
        return [
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
    }

    public static function find(int $id){
        $jobs = Job::all();

        $findingJob = [];

         foreach ($jobs as $job) {
        if ($job['id'] == $id){
          $findingJob = $job ;
        }
    }

    if(!$findingJob){
        return abort(404);
    }

    return $findingJob ; 

    }

    
}