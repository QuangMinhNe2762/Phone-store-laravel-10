<?php

namespace App\Http\Services;

use App\Models\category as Category;

class CategoryService
{
    public function showVisibleCategories()
    {
        return Category::where('status', 0)->paginate(10);
    }
    public function findBySlug($slug)
    {
        return Category::where('slug', $slug)->first();
    }
}
