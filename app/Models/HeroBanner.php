<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class HeroBanner extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'subtitle', 'cta_text', 'cta_url', 'image_path', 'image_alt',
        'sort_order', 'is_active',
    ];

    protected $appends = ['image_url'];

    protected function casts(): array
    {
        return ['is_active' => 'boolean', 'sort_order' => 'integer'];
    }

    public function scopeActive(Builder $query): Builder
    {
        return $query->where('is_active', true)->orderBy('sort_order')->orderBy('id');
    }

    public function getImageUrlAttribute(): string
    {
        if (str_starts_with($this->image_path, 'http') || str_starts_with($this->image_path, 'assets/')) {
            return asset($this->image_path);
        }

        return Storage::disk('public')->url($this->image_path);
    }
}
