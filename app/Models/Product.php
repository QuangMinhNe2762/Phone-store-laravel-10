<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'category_id',
        'slug',
        'brand_id',
        'small_description',
        'description',
        'original_price',
        'selling_price',
        'quantity',
        'trending',
        'status',
        'meta_title',
        'meta_keywords',
        'meta_description',
    ];
    public function category()
    {
        return $this->belongsTo(category::class, 'category_id', 'id');
    }
    public function brand()
    {
        return $this->belongsTo(brand::class, 'brand_id', 'id');
    }
    public function colors()
    {
        return $this->belongsToMany(Color::class, 'product_colors', 'product_id', 'color_id');
    }
    public function product_images()
    {
        return $this->hasMany(Product_image::class, 'product_id', 'id');
    }
    public function user()
    {
        return $this->belongsToMany(User::class, 'wish_lists', 'product_id', 'user_id');
    }
    public function wishList()
    {
        return $this->hasMany(wishList::class, 'product_id', 'id');
    }
    public function cart()
    {
        return $this->hasMany(cart::class, 'product_id', 'id');
    }
    public function order()
    {
        return $this->hasMany(Oder::class, 'product_id', 'id');
    }
    public function product_colors()
    {
        return $this->hasMany(Product_color::class, 'product_id', 'id');
    }
}
