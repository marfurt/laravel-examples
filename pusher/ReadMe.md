# Pusher

## About

Pusher, as well as Socket.io, are tools that use WebSocket to open a direct connection to the user's Web browser so that you can push events directly to the user without reloading their page view.

Pusher.com is a hosted SaaS that makes it super easy to set it up, but you can also set up your own server using Socket.io.

With WebSocket, there is a direct connection being opened between a Web browser and a backend server. The server can push _events_ (which each have a name and optionally a payload of data) along _channels_.

## Configuration

`.env` file:

	BROADCAST_DRIVER=pusher
 	PUSHER_KEY=???
 	PUSHER_SECRET=???
 	PUSHER_APP_ID=???
 	PUSHER_CLUSTER=eu
