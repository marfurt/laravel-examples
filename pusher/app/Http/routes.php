<?php

use App\Events\ServerUpdated;

Route::get('/', function()
{
	return view('welcome');
});

Route::get('/broadcast', function()
{
	$data = [
		'ip'      => Request::ip(),
		'message' => 'Hello from updated server!'
	];

	event(new ServerUpdated($data));

	return 'Event broadcasted : '.json_encode($data);
});

Route::get('/push', function()
{
	$config = config('broadcasting.connections.pusher');
	
	$pusher = new Pusher(
		$config['key'],
		$config['secret'],
		$config['app_id'],
		$config['options']
	);

	$pusher->trigger('server-channel', 'Pushed', [ 'message' => 'Hello from Laravel Pusher' ]);

	return 'Pushed';
});