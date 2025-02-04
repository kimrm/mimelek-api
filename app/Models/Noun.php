<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Noun extends Model
{
    protected $fillable = [
        'word',
        'gender',
        'difficulty',
    ];

    protected function hard(): Attribute
    {
        return Attribute::make(
            get: fn($value) => $value === 'hard',
        );
    }
}
