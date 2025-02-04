<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Adjective extends Model
{
    protected $fillable = [
        'word',
        'difficulty',
        'en',
        'et'
    ];
}
