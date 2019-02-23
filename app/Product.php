<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Product extends Model
{
    public $table = "Products";


    public function category(){
        return $this->belongsTo(Category::class, 'product_id'); 
    }
}