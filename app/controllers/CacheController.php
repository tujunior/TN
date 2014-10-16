<?php
// use Illuminate\Database\Capsule\Manager as Capsule;
// use Illuminate\Cache\CacheManager as CacheManager;
// use Illuminate\Cache\MemcachedConnector as MemcachedConnector;
class CacheController extends BaseController{
	public function index(){
		$value = Cache::put('title', 'Clivern', 30);
		$get = Cache::get('title');
		echo $get;
		//  // $servers = Config::get('cache.memcached'); 
		//  // print_r($servers);
		
		// $capsule = new Capsule;
		//  $container = $capsule->getContainer();

		//     $container = array(
		//         'memcached.connector' => new MemcachedConnector(),
		//         'config'              => array(
		//             'cache.driver'     => 'memcached',
		//             'cache.path'       => __DIR__ . '/cache',
		//             'cache.connection' => null,
		//             'cache.table'      => 'cache',
		//             'cache.memcached'  => array(array('host' => '127.0.0.1', 'port' => 11211, 'weight' => 100),),
		//             'cache.prefix'     => 'INSP',
		//         )
		//     );

		//     $cacheManager = new CacheManager($container);

		//     $capsule->setCacheManager($cacheManager);
		//     $capsule->setAsGlobal();
		//     Capsule::schema()->create('cache', function($table)
		// 	{
		// 	    $table->increments('id');
		// 	    $table->string('email')->unique();
		// 	    $table->timestamps();
		// 	});
		    // $users = Capsule::all();
		    // print_r($users);
			//$name = Capsule::table('cache')->put('title', 'Clivern', 30);

	}
}

?>