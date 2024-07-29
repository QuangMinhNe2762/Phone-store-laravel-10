<?php

namespace App\Http\Services;

use App\Models\brand as Brand;

class BrandService
{
    public function showVisibleBrands()
    {
        return Brand::where('status', 0)->get()->unique('name');
    }
    public function getBrandBySlug($slug)
    {
        return Brand::where('slug', $slug)->first();
    }
}
