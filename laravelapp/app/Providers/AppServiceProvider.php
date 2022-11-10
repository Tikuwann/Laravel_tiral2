<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        view()->composer('hello.index', function ($view) {
            $view->with('view_message','composer message');

        });}}
