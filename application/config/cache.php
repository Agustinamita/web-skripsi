<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Cache Driver
	|--------------------------------------------------------------------------
	|
	| The name of the default cache driver for your application.
	|
	| Caching can be used to increase the performance of your application
	| by storing commonly accessed data in memory or in a file.
	|
	| Supported Drivers: 'file', 'memcached'.
	|
	*/

	'driver' => 'file',

	/*
	|--------------------------------------------------------------------------
	| Memcached Servers
	|--------------------------------------------------------------------------
	|
	| Here you can define the Memcached servers used by your application.
	|
	| Memcached is a free and open source, high-performance, distributed memory
	| object caching system, generic in nature, but intended for use in speeding
	| up dynamic web applications by alleviating database load.
	|
	| For more information about Memcached, check out: http://memcached.org
	|
	*/

	'servers' => array(
		array('host' => '127.0.0.1', 'port' => 11211, 'weight' => 100),
	),

	/*
	|--------------------------------------------------------------------------
	| Memcached Key
	|--------------------------------------------------------------------------
	|
	| This key will be prepended to items stored using Memcached to avoid
	| collisions with other applications on the server.
	|
	*/

	'key' => 'laravel',	

);