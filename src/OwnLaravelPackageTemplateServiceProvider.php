<?php

namespace Simonsraz\OwnLaravelPackageTemplate;

use Illuminate\Support\ServiceProvider;

class OwnLaravelPackageTemplateServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Register package services or bindings here
    }

    public function boot()
    {
        // Load routes, views, migrations, etc.
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        // If the package provides any views
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'yourpackage');

    }
}
