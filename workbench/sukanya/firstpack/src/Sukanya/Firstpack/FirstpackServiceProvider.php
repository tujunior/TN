<?php namespace Sukanya\Firstpack;

use Illuminate\Support\ServiceProvider;

class FirstpackServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('sukanya/firstpack');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	 //  $this->app['testpack'] = $this->app->share(function($app)
	 //  {
	 //    return new Testpack;
	 //  });
		// $this->app->booting(function()
		// {
		//   $loader = \Illuminate\Foundation\AliasLoader::getInstance();
		//   $loader->alias('Firstpack', 'Sukanya\Firstpack\Facades\Testpack');
		// });

		// $this->app->booting(function()
		// {
		//     $loader = \Illuminate\Foundation\AliasLoader::getInstance();
		//    // $loader->alias('testpack', 'Sukanya\Firstpack\Facades\Testpack');
		// });


	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('testpack');
	}

}
