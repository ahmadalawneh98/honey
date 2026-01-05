<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillable = [
        'name_ar',
        'name_en',
        'name_fr',
        'name_es',
        'description_ar',
        'description_en',
        'description_fr',
        'description_es',
        'image',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
