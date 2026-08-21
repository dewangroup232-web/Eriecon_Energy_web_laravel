<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class BlogPost extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'slug', 'excerpt', 'content', 'category', 'author_name',
        'featured_image', 'image_alt', 'reading_minutes', 'published_at',
        'is_featured', 'status', 'seo_title', 'seo_description',
    ];

    protected $appends = ['featured_image_url', 'public_url'];

    protected function casts(): array
    {
        return [
            'published_at' => 'datetime',
            'is_featured' => 'boolean',
            'reading_minutes' => 'integer',
        ];
    }

    public function scopePublished(Builder $query): Builder
    {
        return $query->where('status', 'published')
            ->whereNotNull('published_at')
            ->where('published_at', '<=', now());
    }

    public function getFeaturedImageUrlAttribute(): string
    {
        if (str_starts_with($this->featured_image, 'http') || str_starts_with($this->featured_image, 'assets/')) {
            return asset($this->featured_image);
        }

        return Storage::disk('public')->url($this->featured_image);
    }

    public function getPublicUrlAttribute(): string
    {
        return route('blog.show', $this->slug);
    }
}
