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

    public function scopeDifficulty($query, $difficulty)
    {
        if ($difficulty) {
            return $query->where('difficulty', $difficulty);
        }
    }

    public function scopeWord($query, $word)
    {
        if ($word) {
            return $query->where('word', 'like', '%' . $word . '%');
        }
    }
}
