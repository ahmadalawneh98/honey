<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [
        'category_id',
        'title_ar',
        'title_en',
        'title_fr',
        'title_es',
        'description_ar',
        'description_en',
        'description_fr',
        'description_es',
        'images',
        'sizes_ar',
        'sizes_en',
        'sizes_fr',
        'sizes_es',
    ];

    protected $casts = [
        'images' => 'array', // مهم جدًا
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
