<?php
/**
 * Created by PhpStorm.
 * User: edwinsturt
 * Date: 16/12/18
 * Time: 12:14 AM
 */

namespace sturt\salary;

use Illuminate\Support\ServiceProvider;


class SalaryServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap the application services.
     *
     * @return void
     */

    public function boot()
    {


        $this->publishes([__DIR__.'/config/sa.php' => config_path('sa.php')],'sa_config');

        $this->registerRoutes();
        $this->registerViews();
    }


    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->singleton('SA', function ()
        {
            return true;
        });


    }

    /**
     * Register the package views
     *
     * @see http://laravel.com/docs/master/packages#views
     * @return void
     */
    protected function registerViews()
    {
        // register views within the application with the set namespace
        $this->loadViewsFrom($this->packagePath('resources/views'), 'SA');
        // allow views to be published to the storage directory

    }


    /**
     * Register the package routes
     *
     * @warn consider allowing routes to be disabled
     * @see http://laravel.com/docs/master/routing
     * @see http://laravel.com/docs/master/packages#routing
     * @return void
     */
    protected function registerRoutes()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadRoutesFrom(__DIR__.'/routes/api.php');
    }
    /**
     * Loads a path relative to the package base directory
     *
     * @param string $path
     * @return string
     */
    protected function packagePath($path = '')
    {
        return sprintf("%s/../%s", __DIR__ , $path);
    }


}