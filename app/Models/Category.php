<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'parent_id', 'slug', 'description', 'image', 'meta_title', 'meta_keyword', 'meta_description', 'status'];
    public function products()
    {
        return $this->hasMany(Product::class, 'category_id', 'id');
    }
}
