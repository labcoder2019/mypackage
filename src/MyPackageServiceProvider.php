<?php

namespace Labcoder2019\MyPackage;

use Illuminate\Support\ServiceProvider;

class MyPackageServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;


    public function boot()
    {
        // Bootstrap handles
        $this->routeHandle();
        $this->viewHandle();
    }


    public function register()
    {
        $this->app->singleton('mypackage', function ($app) {
            return new MyPackage;
        });
    }


    public function provides()
    {
        return [
            'mypackage',
        ];
    }


    protected function routeHandle()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/routes.php');
    }


    protected function viewHandle()
    {
        $packageViewsPath = __DIR__.'/resources/views';
        $this->loadViewsFrom($packageViewsPath, 'mypackage');
        $this->publishes([
            $packageViewsPath => resource_path('views/vendor/mypackage'),
        ], 'views');
    }
}
