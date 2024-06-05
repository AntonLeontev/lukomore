<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'rating',
        'text',
    ];

    protected static function booted(): void
    {
        static::created(function (Review $post) {
            cache()->forget('reviews');
        });

        static::updated(function (Review $post) {
            cache()->forget('reviews');
        });

        static::deleted(function (Review $post) {
            cache()->forget('reviews');
        });
    }
}
