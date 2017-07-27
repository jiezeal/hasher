<?php

namespace Jiezeal\Hasher;

use Illuminate\Support\ServiceProvider;

class MD5HasherProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'courier');
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/vendor/courier'),
        ]);
        $this->publishes([
            __DIR__.'/config/courier.php' => config_path('courier.php'),
        ]);
        $this->publishes([
            __DIR__.'/assets' => public_path('vendor/courier'),
        ], 'public');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('md5hash', MD5Hasher::class);
    }
}
