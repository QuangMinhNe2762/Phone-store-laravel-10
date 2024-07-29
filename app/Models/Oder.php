<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oder extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'product_id', 'Name', 'Phone', 'Email', 'Address', 'total_price', 'total_quantity', 'order_id', 'color_id'];
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
