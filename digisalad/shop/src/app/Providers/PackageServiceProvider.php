<?php

namespace Digisalad\Shop\Providers;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

/**
 * Class PackageServiceProvider
 * @package Digisalad\Shop\Providers
 */
class PackageServiceProvider extends BaseServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $srcPath = __DIR__ . '/../../';
        
        $this->publishes([
            $srcPath . '/config/digisalad-shop.php' => config_path('digisalad-shop.php'),
        ], 'digisalad-shop-config');

        if( config('digisalad-shop.feature.load_migration', true) ) {
            $this->loadMigrationsFrom($srcPath . 'database/migrations');
        }

        $path = $srcPath . "route/api.php";
        if( config('digisalad-shop.feature.load_api_route', true) ) {
            if (file_exists($path)) {
                $this->loadRoutesFrom($path);
            }
        }
        

        
        
    }
}
