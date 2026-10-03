<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\Hasfactory;
use Illuminate\Database\Eloquent\Model;



class project extends Model
{
    //
    use HasFactori;
    protected $table = "projects";
    protected $fillable =[
        "title",
        "description",
        "trknologi",
        "image",
        "status",

    ];
}
