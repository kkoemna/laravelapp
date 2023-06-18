<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Rule;

class HelloServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Validator::extend('hello', function ($attribute, $value, $parameters, $validator) {
            return $value % 2 == 0;
        });
    }
}
