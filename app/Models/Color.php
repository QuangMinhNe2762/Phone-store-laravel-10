<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'code', 'status'];
    // public function products()
    // {
    //     return $this->belongsToMany(Product::class, 'product_colors', 'color_id', 'product_id');
    // }
    // public function carts()
    // {
    //     return $this->hasMany(cart::class, 'color_id', 'id');
    // }
    // public function product_colors()
    // {
    //     return $this->hasMany(Product_color::class, 'color_id', 'id');
    // }
}
