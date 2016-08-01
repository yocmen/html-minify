<?php namespace Yocmen\HtmlMinify;

use Illuminate\Support\ServiceProvider;
use Illuminate\View\Engines\CompilerEngine;

class HtmlMinifyServiceProvider extends ServiceProvider {
	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
    protected $defer = false;

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../../config/config.php' => config_path('htmlMinify.php'),
        ]);
    }

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
        $app = $this->app;
        $app->view->getEngineResolver()->register(
            'blade',
            function () use ($app) {
                $cachePath = storage_path().'/framework/views';
                $compiler  = new HtmlMinifyCompiler(
                    config('htmlMinify'),
                    $app['files'],
                    $cachePath
                );

                return new CompilerEngine($compiler);
            }
        );
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return [];
	}
}