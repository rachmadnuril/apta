<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    // Fillable
    protected $fillable = [
        'name', 'slug', 'image'
    ];

    // Image Attribute
    public function getImageAttribute ($image){
        return asset('storages/categories'. $image);
    }

    public function products (){
        return $this->hasMany(Product::class);
    }
}
