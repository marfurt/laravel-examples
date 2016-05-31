<?php

Route::get('/', function()
{
	Redis::set('username', 'john.doe');

	return Redis::get('username');
});

Route::get('/publish', function()
{
	$data = [ 'foo' => 'bar' ];

	Redis::publish('test-channel', json_encode($data));

	return "Published on test-channel";
});

Route::get('/cache', function()
{
	Cache::put('username', 'john.doe', 1);

	return Cache::get('username');
});
