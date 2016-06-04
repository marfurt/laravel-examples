// Note: Pusher SDK is loaded in the view

Pusher.logToConsole = true; // Enable pusher logging; don't include this in production

let pusher = new Pusher('<push-key>', {
	cluster: 'eu',
	encrypted: true
})

let channel = pusher.subscribe('server-channel')

channel.bind('Pushed', function(data) {
	console.log(data.message)

	alert('Received a push')
})

channel.bind('App\\Events\\ServerUpdated', function(event) {
	console.log(event.server)

	alert('Received an event')
})
