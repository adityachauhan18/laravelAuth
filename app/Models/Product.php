<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    
    protected $fillable =  ['category_id', 'product_name','product_description','product_prize','product_brand','product_image','product_discount'];
   

    
    
    
}
