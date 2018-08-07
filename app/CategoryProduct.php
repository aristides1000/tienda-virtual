<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryProduct extends Model
{
    
    protected $fillable = [
        'category_product','subcategory_product',
    ];


    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function scopeName($query, $category)
    {
        if ($category) {
            return $query->where('category', 'LIKE', "%$category%");
        }

    }

 
}
