<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class AdditionalClass extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'preview_text',
        'thumbnail',
        'image',
        'text',
    ];

    public function getThumbnailUrlAttribute(): string
    {
        return asset('storage/'.$this->thumbnail);
    }

    public function getImageUrlAttribute(): string
    {
        return asset('storage/'.$this->image);
    }

    protected static function booted(): void
    {
        static::creating(function (AdditionalClass $class) {
            cache()->forget('additional_classes');

            $class->thumbnail = $class->thumbnail ?: $class->image;
        });

        static::updating(function (AdditionalClass $class) {
            cache()->forget('additional_classes');
        });

        static::deleted(function (AdditionalClass $class) {
            Storage::delete($class->image);
            Storage::delete($class->thumbnail);
            cache()->forget('additional_classes');
        });
    }
}
