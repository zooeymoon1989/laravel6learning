<?php

namespace App\Providers;

use App\ForTest\FooBar;
use function foo\func;
use Illuminate\Support\ServiceProvider;

class MyTestServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     */
    public function register()
    {
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

    }
}
