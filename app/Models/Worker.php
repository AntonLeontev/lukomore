<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Worker extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'profession',
        'description',
        'photo',
    ];

    public function getUrlAttribute(): string
    {
        return asset('storage/'.$this->photo);
    }

    protected static function booted(): void
    {
        static::created(function (Worker $post) {
            cache()->forget('team');
        });

        static::updated(function (Worker $post) {
            cache()->forget('team');
        });

        static::deleted(function (Worker $post) {
            Storage::delete($post->photo);
            cache()->forget('team');
        });
    }
}
