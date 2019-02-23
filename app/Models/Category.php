<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $table = "categories";

    public function Products(){
        return $this->hasMany(Product::class, 'category_id'); 
        
    }
}
