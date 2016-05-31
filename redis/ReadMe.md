# Laravel Samples – Redis

A small application that demonstrates the use of [redis.io](http://redis.io) in a [Laravel](https://laravel.com) application. See the [official documentation](https://laravel.com/docs/5.2/redis) for detailed information.


# Requirements

Redis needs to be installed on your system. If it is not the case, you can install it via Homebrew and follow the steps described [in this article](https://medium.com/@petehouston/install-and-config-redis-on-mac-os-x-via-homebrew-eb8df9a4f298#.brf4d9xgb).

	$ brew install redis


# Configuration

Install the `predis/predis` package:

	$ composer require predis/predis

Edit the Redis configuration in the `config/database.php` file.


# Usage

