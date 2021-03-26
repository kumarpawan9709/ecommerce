<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVarient extends Model
{
    use HasFactory;
     
    protected $fillable = ['product_id','quantity','unit','base_price','base_mrp','description','status'];
    function product(){
        return $this->belongsTo(Product::class);
    }
}
