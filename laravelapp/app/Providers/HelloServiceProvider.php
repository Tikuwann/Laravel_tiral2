<?php

namespace App\Providers;

use Validator;
use App\Http\Validators\HelloValidator;
use Illuminate\Support\ServiceProvider;

class HelloServiceProvider extends ServiceProvider
{
public function boot()
{
Validator::extend('hello',function($attribute,$value,$parameters,$validator){return $value % 2 == 0;
});}
}
