<?php

namespace Wapnen\GhRegionDistrict;

use Illuminate\Support\ServiceProvider;

class GhRegionDistrictServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        include __DIR__ . '/routes.php';
        $this->loadViewsFrom(__DIR__ . '/views', 'ghregiondistrict');
        $this->loadMigrationsFrom(__DIR__.'/migrations');
        // publish seeds
        $this->publishes([ __DIR__ . '/seeds' => $this->app->databasePath() . '/seeds' ], 'seeds');
        $this->publishes([__DIR__ . '/migrations' => $this->app->databasePath() . '/migrations'], 'migrations');
      // publish views
        $this->publishes([__DIR__.'/views' => resource_path('views/ghregiondistrict'),], 'views');
        
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind('ghregiondistrict', function() {
            return new ghregiondistrict;
        });
    }
}
