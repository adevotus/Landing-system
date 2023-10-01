<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gudian extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'region',
        'contact',
        'email',
       
      
    ];
}
