<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{ 
    use HasFactory;
    protected $fillable = ['sub_name','img_path','status','category_id'];
    public function products()
    {
        return $this->hasMany('App\Models\Product');
    }
   
}
