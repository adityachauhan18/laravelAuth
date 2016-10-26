<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Category extends Model
{
    protected $table = 'category';
    
    public function latestProduct(){
        
        return $this->hasMany('App\Models\Product');
    }
    
    
    
}
