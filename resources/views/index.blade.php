<html>
<head>
<title>Drone API Documentation</title>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.9.1/styles/default.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.9.1/highlight.min.js"></script>
<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
<script>hljs.initHighlightingOnLoad();</script>
</head>
<body>
<div class="container">

<h2>Usage</h2>
<br>

<section>
	<span>
		<h5>Register</h5>
		Example POST request to the register route
		<pre>
		<code class="php">
		POST https://drone-app.herokuapp.com/api/v1/register

		Request Body:
		{
			'email'     : 'johndoe',
			'password'  : 'password',
		}
		</code>
		</pre>
	</span>

	<span>
		Upon successful or failed registration, a Json object is return containing the
		status code and response message.

		<pre>
		<code class="php">
		Successful Response Body:
		{
			"status"  : 200,
			"massage" : "Registration Successful"
		}

		Failed Response Body:
		{
			"status"  : 500,
			"massage" : "Registration Failed"
		}
		</code>
		</pre>
	</span>
</section>

<section>
	<span>
		<h5>Login</h5>
		Example POST request to the login route
		<pre>
		<code class="php">
		POST https://drone-app.herokuapp.com/api/v1/login

		Request Body:
		{
			'email'     : 'johndoe',
			'password'  : 'password',
		}
		</code>
		</pre>
	</span>


	<span>
		Upon successful login, a Json object is return containing the
		status code, the token generated and the success message. A response header containing the 'Authorization'. This token is required, as an 'Authorization' header
		to access all protected routes.

		<pre>
		<code class="php">
		Successful Response Body:
		{
			"status"    : 200,
			"massage"   : "Registration Successful",
			"token"     : "SomeRandomToken",
		}

		Failed Response Body:
		{
			"status"  : 500,
			"massage" : "the appropriate error message"
		}
		</code>
		</pre>
	</span>
</section>

<section>
	<span>
		<h5>Users</h5>
		To get all users, a GET request should be sent to
		<pre>
		<code class="php">
		https://drone-app.herokuapp.com/api/v1/users
		</code>
		</pre>
		This route is not protected and does not need an authorization token.

		<pre>
		<code class="php">
		Response Body:
		{
		  "status": "200",
		  "message": "all users",
		  "data": [
		    {
		      "id": 1,
		      "email": "emeka@gmail.com",
		      "created_at": "2016-07-21 09:59:10",
		      "updated_at": "2016-07-21 09:59:10"
		    }
		  ]
		}
		</code>
		</pre>
	</span>
</section>

<section>
	<span>
		<h5>Edit User</h5>
		To edit an user send a POST request to
		<pre>
		<code class="php">
		https://drone-app.herokuapp.com/api/v1/user/{id}
		</code>
		</pre>

		Example:
		<pre>
		<code class="php">
		POST https://drone-app.herokuapp.com/api/v1/user/1

		Request Body
		{
			'id'     : 1,
			'name'   : "name",
			'email'  ; 'email'
		},
		</code>
		</pre>

		All arguments, except the id, are optional.

		<pre>
		<code class="php">
		Successful Response Body:

		{
			'status'  :  200,
			'message' : 'Record modified'
		}

		Failed Response Body:

		{
			'status'  :  501,
			'message' : 'appropriate error message '
		}
		</code>
		</pre>
	</span>
</section>

<section>
	<span>
		<h5>Videos</h5>
		To get all videos, a GET request should be sent to
		<pre>
		<code class="php">
		https://drone-app.herokuapp.com/api/v1/videos
		</code>
		</pre>
		This route is not protected and does not need an authorization token.

		<pre>
		<code class="php">
		Response Body:

		{
		  "status": "200",
		  "data": [
		    {
		      "id": 1,
		      "title": "fjlkvdf",
		      "url": "https://www.youtube.com/watch?v=5uvxslq63k0",
		      "description": "flsrfdessdl",
		      "user_id": 1,
		      "created_at": "2016-07-21 10:10:34",
		      "updated_at": "2016-07-21 10:10:34"
		    }
		  ]
		}
		</code>
		</pre>
	</span>
</section>

<section>
	<span>
		<h5>Create Video</h5>
		To get all videos, a GET request should be sent to
		<pre>
		<code class="php">
		https://drone-app.herokuapp.com/api/v1/video/create

		Request Body:
		{
			'title'     	: 'johndoe',
			'video'     	:  fileObject,
			'description'  	: 'password',
		}
		</code>
		</pre>
		This route needs an authorization token.


		<pre>
		<code class="php">
		Response Body:
		{
		  "status": "200",
		  "message": "Video successful uploaded"
		}

		Failed Response Body:

		{
			'status'  :  501,
			'message' : 'appropriate error message '
		}
		</code>
		</pre>
	</span>
</section>


</div>
</body>
</html>
