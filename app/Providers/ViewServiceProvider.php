<?php

namespace App\Providers;

use App\Http\View\Composers\MenuComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{

    public function register()
    {
        //
    }


    public function boot()
    {
        View::composer(['User.Layouts.nav', 'User.Layouts.footer'], MenuComposer::class);
    }
}
