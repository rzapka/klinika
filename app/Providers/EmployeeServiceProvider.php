<?php

namespace App\Providers;

use App\Repository\EmployeeRepository;
use Illuminate\Support\ServiceProvider;

class EmployeeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(EmployeeRepository::class,
        \App\Repository\Employee\EmployeeRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
