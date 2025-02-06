<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Adjective extends Model
{
    protected $fillable = [
        'word',
        'difficulty',
        'en',
        'et',
        'language'
    ];

    protected function scopeWord($query, $word)
    {
        if ($word) {
            return $query->where('word', 'like', '%' . $word . '%');
        }
    }

    protected function scopeDifficulty($query, $difficulty)
    {
        if ($difficulty) {
            return $query->where('difficulty', $difficulty);
        }
    }

    protected function scopeLanguage($query, $language)
    {
        if ($language) {
            return $query->where('language', $language);
        }
    }
}
