# Laravel Samples – Redis

A small application that demonstrates the use of [redis.io](http://redis.io) in a [Laravel](https://laravel.com) application. See the [official documentation](https://laravel.com/docs/5.2/redis) for detailed information.


# Requirements

Redis needs to be installed on your system. If it is not the case, you can install it via Homebrew (see [this article](https://medium.com/@petehouston/install-and-config-redis-on-mac-os-x-via-homebrew-eb8df9a4f298#.brf4d9xgb) for more details):

	$ brew install redis
	
To have launchd start redis and restart at login:

	$ brew services start redis

Or to start Redis server using configuration file, without a background service:

	$ redis-server /usr/local/etc/redis.conf


# Configuration

Install the `predis/predis` package:

	$ composer require predis/predis

Edit the Redis configuration in the `config/database.php` file.


# Usage

You may interact with Redis by calling various methods on the Redis facade.

Set and get a value :

	Redis::set('user:username', 'john.doe');
	
	$username = Redis::get('user:username');
	
Publish messages to a channel :

	Redis::publish('test-channel', json_encode(['foo' => 'bar']));

	
## Using Redis for caching

Edit the cache configuration located at `config/cache.php` and specify `redis` as the default cache driver (or define it in your `.env` file).
