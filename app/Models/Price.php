<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'amount',
    ];

    protected $casts = [
        'price_per_month' => 'boolean',
        'enabled' => 'boolean',
    ];

    public function getAmountFormat(): string
    {
        return number_format($this->amount, 0, '.', ' ');
    }

    protected static function booted(): void
    {
        static::creating(function (Price $price) {
            $lastPosition = Price::max('position');

            $price->position = $lastPosition + 1;
        });
    }
}
