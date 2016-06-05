<!DOCTYPE html>
<html>
	<head>
		<title>Laravel & Socket.IO</title>
		<style>
			html, body {
				height: 100%;
			}
			body {
				margin: 0;
				padding: 20px;
				width: 100%;
				display: table;
				font-weight: 100;
				font-family: 'Helvetica';
			}
		</style>
	</head>
	<body>
		<h1>Socket.IO</h1>

		<blockquote>
			We need to add the client part of socket.io :
			<pre>https://cdnjs.cloudflare.com/ajax/libs/socket.io/x.y.z/socket.io.min.js</pre>

			Plus we use VueJS for the example :
			<pre>https://cdnjs.cloudflare.com/ajax/libs/socket.io/x.y.z/socket.io.min.js</pre>
		</blockquote>

		<h4>New Users</h4>

		<ul>
			<li v-for="user in users">@{{ user }}</li>
		</ul>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.24/vue.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/1.4.6/socket.io.min.js"></script>
		<script src="js/app.js"></script>
		<script>
			var socket = io('http://127.0.0.1:3000'); // Node server is running on 3000 port (see socket.js)

			new Vue({
				el: 'body',

				data: {
					users: []
				},

				ready: function() {
					socket.on('test-channel:UserSignedUp', function(data) {
						console.log('One more user: ' + data.username)

						this.users.push(data.username);
					}.bind(this));

					socket.on('test-channel:App\\Events\\UserSignedUp', function(data) {
						console.log('One more user using event broadcast: ' + data.username)

						this.users.push(data.username);
					}.bind(this));
				}
			});
		</script>
	</body>
</html>
