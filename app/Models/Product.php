<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function categories(){
        return $this->belongsToMany(Category::class);
    }

     public function sub_category(){
        return $this->belongsTo(SubCategory::class);
    }

    public function product_images()
    {
        return $this->hasMany(ProductImages::class);
    }
}
