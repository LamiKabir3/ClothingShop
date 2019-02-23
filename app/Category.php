<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Category extends Model
{
    public $table = "categories";

    public function Products(){
        return $this->hasMany(Product::class, 'category_id'); 
        
    }
}
