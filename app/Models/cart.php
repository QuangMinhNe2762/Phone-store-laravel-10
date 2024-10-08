<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'product_id', 'quantity', 'price', 'color_id'];
    public function products()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function color()
    {
        return $this->belongsTo(Color::class, 'color_id', 'id');
    }
}
