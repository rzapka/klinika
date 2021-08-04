<?php

namespace App\Providers;

use App\Repository\OvertureRepository;
use Illuminate\Support\ServiceProvider;

class OvertureServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(OvertureRepository::class,
            \App\Repository\Overture\OvertureRepository::class);
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
