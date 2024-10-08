<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug', 'logo', 'status', 'category_id'];
    public function category()
    {
        return $this->belongsTo(category::class, 'category_id', 'id');
    }
    public function products()
    {
        return $this->hasMany(Product::class, 'brand_id', 'id');
    }
}
