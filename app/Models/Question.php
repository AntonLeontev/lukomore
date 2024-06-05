<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'question',
        'answer',
    ];

    protected static function booted(): void
    {
        static::created(function (Question $post) {
            cache()->forget('questions');
        });

        static::updated(function (Question $post) {
            cache()->forget('questions');
        });

        static::deleted(function (Question $post) {
            cache()->forget('questions');
        });
    }
}
