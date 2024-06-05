<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Photo extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'path',
    ];

    public function getUrlAttribute(): string
    {
        return asset('storage/'.$this->path);
    }

    protected static function booted(): void
    {
        static::created(function (Photo $post) {
            cache()->forget('gallary');
        });

        static::deleted(function (Photo $post) {
            Storage::delete($post->path);
            cache()->forget('gallary');
        });
    }
}
