<?php

namespace App\Models;
use Illuminate\Support\Arr;

class Job {
    public static function all(){
        return [
            [
                'id'=>1,
                'name'=> 'Programmer',
                'salary'=>50000,
            ],
            [
                'id'=>2,
                'name'=> 'Teacher',
                'salary'=>10000,
            ],
            [
                'id'=>3,
                'name'=> 'Hacker',
                'salary'=>500000,
            ],
        ];
    }


    public static function find(int $id){
        $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);

        if (! $job) {
            abort(404);
        }

        return $job;
    }
}


