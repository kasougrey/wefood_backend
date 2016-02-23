<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category(){
        return $this->belongsTo(ProductCategory::class,'product_category_id');
    }

    public function tags(){
        return $this->morphMany(Tag::class, 'tagable');
    }
}
