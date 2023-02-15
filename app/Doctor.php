<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
        'name', 
        'photo', 
        'department', 
        'gender', 
        'bechelor', 
        'experience', 
        'age', 
        'specialist'
    ];
}
