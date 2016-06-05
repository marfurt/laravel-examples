<?php

use App\Events\UserSignedUp;

Route::get('/', function()
{
	$data = [
		'event' => 'UserSignedUp',
		'data'  => [
			'username' => 'john.doe'
		]
	];

	Redis::publish('test-channel', json_encode($data));

	return view('welcome');
});

Route::get('/broadcast', function()
{
	event(new UserSignedUp('john.deer'));

	return view('welcome');
});
