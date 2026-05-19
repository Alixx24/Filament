<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'description',
        'price',
        'is_visible',
        'certificate_image',
        'description_fa',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'alt_text',
        'thumbnail',
        'summary',
        'tags'
    ];
    protected $casts = [
        'certificate_images' => 'array',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function attaches()
    {
        return $this->hasMany(Attach::class);
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
