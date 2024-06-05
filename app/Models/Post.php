<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'preview_text',
        'text',
        'author',
        'thumbnail',
        'image',
        'views',
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
        static::creating(function (Post $post) {
            $slug = Str::slug($post->title);

            $sameSlugsCount = Post::where('slug', 'like', "$slug%")
                ->count();

            if ($sameSlugsCount > 0) {
                $post->slug = "$slug-".++$sameSlugsCount;
            } else {
                $post->slug = $slug;
            }

            $post->thumbnail = $post->thumbnail ?: $post->image;

            $post->preview_text = $post->preview_text ?: str($post->text)->stripTags()->limit(100)->value();
        });
    }
}
