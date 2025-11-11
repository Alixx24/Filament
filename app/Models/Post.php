<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory,SoftDeletes;
      protected $fillable = [
        'title',
        'slug',
        'summary',
        'content',
        'user_id',
        'category_id',
        'status',
        'published_at',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'canonical_url',
        'thumbnail',
        'alt_text',
        'views',
        'is_featured',
    ];

     protected $casts = [
        'published_at' => 'datetime',
        'is_featured' => 'boolean',
        'views' => 'integer',
    ];


    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

      public function scopePublished($query)
    {
        return $query->where('status', 'published')
                     ->whereNotNull('published_at')
                     ->where('published_at', '<=', now());
    }

    /**
     * لینک کامل مقاله (برای نمایش در سایت)
     */
    public function getUrlAttribute(): string
    {
        return url('/posts/' . $this->slug);
    }

    /**
     * اگر meta_title خالی بود، از title استفاده کن
     */
    public function getMetaTitleAttribute($value)
    {
        return $value ?: $this->title;
    }

    /**
     * اگر meta_description خالی بود، از summary استفاده کن
     */
    public function getMetaDescriptionAttribute($value)
    {
        return $value ?: Str::limit(strip_tags($this->summary ?? $this->content), 160);
    }
}
