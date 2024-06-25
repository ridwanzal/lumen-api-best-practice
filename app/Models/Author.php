<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    // Specify the fillable attributes
    protected $fillable = [
        'name', 'gender', 'biography'
    ];
}