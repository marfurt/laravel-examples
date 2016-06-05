# Socket.IO

## About

[Socket.IO](https://socket.io) enables real-time bidirectional event-based communication.

Socket.IO is composed of two parts:

- A server that integrates with (or mounts on) the Node.JS HTTP Server: `socket.io`
- A client library that loads on the browser side: `socket.io-client`

## Configuration

Install [Express](http://expressjs.com) to get a Web framework :

	$ npm install --save express

Install Socket.io server :

	$ npm install --save socket.io

Install a [Redis client](https://github.com/luin/ioredis) :

	$ npm install --save ioredis

## Usage

Launch Redis manually, if it is not already running :

	$ redis-server /usr/local/etc/redis.conf

Launch our socket.io server using Redis pub/sub :

	$ node socket.js

Go to the Web page `/` or `/broadcast` to see the list of connected users.

See `resources/views/welcome.blade.php`, `app/Http/routes.php` and `app/Events/UserSignedUp.php` for more details.

## Links

See https://laracasts.com/series/real-time-laravel-with-socket-io/