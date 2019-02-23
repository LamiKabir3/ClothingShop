<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $table = "Products";


    public function category(){
        return $this->belongsTo(Category::class, 'product_id'); 
    }
}
