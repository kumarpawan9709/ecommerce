<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
     
    protected $fillable = ['product_name','product_image','status','sub_category_id'];
    function product_varient(){
        return $this->hasOne(ProductVarient::class);
    }
}
