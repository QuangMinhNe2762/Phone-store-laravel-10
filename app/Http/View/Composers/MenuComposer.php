<?php


namespace App\Http\View\Composers;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\View\View;

class MenuComposer
{
    protected $users;

    public function __construct()
    {
    }

    public function compose(View $view)
    {
        $menu = Category::where('status', 0)->limit(5)->pluck('name', 'slug')->unique()->all();
        $brands = Brand::where('status', 0)->limit(5)->pluck('name', 'slug')->unique()->all();
        $view->with('menu', $menu)->with('brands', $brands);
    }
}
