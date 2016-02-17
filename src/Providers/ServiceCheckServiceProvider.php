<?php
// ognjenm\serverreqcheck\ServiceCheckServiceProvider
namespace ognjenm\serverreqcheck\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\View\Environment;

class ServiceCheckServiceProvider extends ServiceProvider
{

    /**
    * Indicates if loading of the provider is deferred.
    *
    * @var bool
    */
    protected $defer = false;

    public function boot()
    {
        $this->package('ognjenm/serverreqcheck');
        $this->loadIncludes();
        \View::addLocation(__DIR__ . '/../../views');
    }

    /**
    * Register the service provider.
    *
    * @return void
    */
    public function register()
    {
        // load package config
        $this->app['config']->package('ognjenm/serverreqcheck', __DIR__.'/../../config');

    }

    /**
    * Get the services provided by the provider.
    *
    * @return array
    */
    public function provides()
    {
        return array();
    }

    /**
     * Include some specific files from the src-root.
     *
     * @return void
     */
    private function loadIncludes()
    {
        // Add file names without the `php` extension to this list as needed.
        $filesToLoad = array(
            'composers',
            'filters',
            'routes',
        );

        // Run through $filesToLoad array.
        foreach ($filesToLoad as $file) {
            // Add needed database structure and file extension.
            $file = __DIR__ . '/../Http/' . $file . '.php';
            // If file exists, include.
            if (is_file($file)) include $file;
        }
    }





}
