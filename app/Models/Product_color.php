<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_color extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'color_id',
        'quantity',
    ];
    public function products()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
    public function colors()
    {
        return $this->belongsTo(Color::class, 'color_id', 'id');
    }
}
