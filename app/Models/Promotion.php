<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
    ];

    protected static function booted(): void
    {
        static::created(function (Promotion $post) {
            cache()->forget('promotions');
        });

        static::updated(function (Promotion $post) {
            cache()->forget('promotions');
        });

        static::deleted(function (Promotion $post) {
            cache()->forget('promotions');
        });
    }
}
