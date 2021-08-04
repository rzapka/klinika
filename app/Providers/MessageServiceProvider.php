<?php

namespace App\Providers;

use App\Repository\MessageRepository;
use Illuminate\Support\ServiceProvider;

class MessageServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(MessageRepository::class,
        \App\Repository\Message\MessageRepository::class);
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
