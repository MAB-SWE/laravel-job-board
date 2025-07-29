<?php

namespace App\Models;


class Job
{
    public static function all(){
        return [
            ["title" => "software Engineer" , "salary" => "$1000"],
            ["title" => "RP" , "salary" => "$100"],
            ["title" => "songer" , "salary" => "$500"]
        ];
    }
}
