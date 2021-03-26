<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name','img_path','status'];
    public function subcategories()
    {
        return $this->hasMany(SubCategory::class);
    }
    public function getname($id)
    {
                $category=Category::find($id)->get();
                return $category->name;
        // return $this->hasMany('App\Models\SubCategory');
    }
}
