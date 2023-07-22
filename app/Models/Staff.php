<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;
    protected $fillable = [
        'Fname',
        'Lname',
        'Mname',
        'email',
        'contact',
        'location',
        'job_title',
        'job_position',
        'description',
    ];
}

