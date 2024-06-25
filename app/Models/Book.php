<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    // Specify the fillable attributes
    protected $fillable = [
        'title', 'description', 'author'
    ];
}