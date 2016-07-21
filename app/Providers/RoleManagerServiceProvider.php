<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Role\Role;

class RoleManagerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('role.manager', function ($app) {
            return new Role($app);
        });
    }

    public function provides()
    {
        return ['role.manager'];
    }
}
