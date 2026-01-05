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
        'sizes',
        'image',
    ];

    protected $casts = [
        'sizes' => 'array',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
