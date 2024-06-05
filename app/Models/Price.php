<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'amount',
    ];

    public function getAmountAttribute($value): string
    {
        return number_format($value, 0, '.', ' ');
    }

    protected static function booted(): void
    {
        static::created(function (Price $post) {
            cache()->forget('prices');
        });

        static::updated(function (Price $post) {
            cache()->forget('prices');
        });
    }
}
