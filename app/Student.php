<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'student_name',
        'student_roll',
        'student_address',
        'email'
    ];

    protected $dates = ['deleted at'];
}
