<?php namespace App\Events;

use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class ServerUpdated implements ShouldBroadcast
{
	use SerializesModels;

	public $server;

	public function __construct($server)
	{
		$this->server = $server;
	}

	public function broadcastOn()
	{
		return [ 'server-channel' ];
	}
	
}
