<?php namespace App\Events;

use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class UserSignedUp implements ShouldBroadcast {

	use SerializesModels;

	public $username; // Need to be public to be serialized !

	public function __construct($username)
	{
		$this->username = $username;
	}

	public function broadcastOn()
	{
		return [ 'test-channel' ];
	}

}
