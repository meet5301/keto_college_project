<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
			display: flex;
			justify-content: center;
			align-items: center;
			min-height: 100vh;
			background-color: #f9f9f9;
		}

		.container {
			display: flex;
			align-items: center;
			background: #fff;
			box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
			border-radius: 10px;
			overflow: hidden;
			max-width: 900px;
			width: 100%;
		}

		.form-section {
			flex: 1;
			padding: 40px;
		}

		.form-section h2 {
			margin-bottom: 20px;
			font-size: 28px;
		}

		.form-group {
			margin-bottom: 20px;
		}

		.form-group label {
			display: block;
			font-weight: bold;
			margin-bottom: 5px;
		}

		.form-group input[type="text"],
		.form-group input[type="password"] {
			width: 80%;
			padding: 10px;
			border: 1px solid #ccc;
			border-radius: 5px;
		}

		.form-group input[type="checkbox"] {
			margin-right: 10px;
		}

		.form-group button {
			width: 85%;
			padding: 10px;
			background-color: #007bff;
			border: none;
			color: white;
			font-size: 16px;
			border-radius: 5px;
			cursor: pointer;
		}

		.form-group button:hover {
			background-color: #0056b3;
		}

		.social-login {
			margin-top: 20px;
		}

		.social-login a {
			display: inline-block;
			margin-right: 10px;
			width: 40px;
			height: 40px;
			line-height: 40px;
			text-align: center;
			border-radius: 5px;
			background-color: #ddd;
			color: #fff;
			font-size: 18px;
			text-decoration: none;
		}

		.social-login a.facebook {
			background-color: #3b5998;
		}

		.social-login a.twitter {
			background-color: #1da1f2;
		}

		.social-login a.google {
			background-color: #db4437;
		}

		.create-account {
			margin-top: 20px;
			margin-left: 80px;
			/* text-align: center; */
		}

		.create-account a {
			text-decoration: none;
			color: #007bff;
		}

		.create-account a:hover {
			text-decoration: underline;
		}
		.abc {
			margin-top: 20px;
			margin-left: 160px;
			/* text-align: center; */
		}

		.abc a{
			text-decoration: none;
			color: #007bff;
		}
	</style>
</head>

<body>
	<div class="container">
		<img src="images/signin-image.jpg" style="margin-left:30px;">
		<div class="form-section">
			<h2>Sign up</h2>
			<form action="login" method="post">
				@csrf
				<div class="form-group">
					<label for="name">Your Username</label>
					<input type="text" placeholder="" name="username" required />
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" placeholder="" name="pass" required />
				</div>
				<!-- <div class="form-group">
					<input type="checkbox" id="remember">
					<label for="remember">Remember me</label>
				</div> -->
				<div class="form-group">
					<button type="submit" value="Submit" name="sub">Log in</button>
				</div>
				@if($errors->any())
					<span style="color: red;">
						<h4>{{$errors->first()}}</h4>
					</span>
				@endif
				<div class="create-account">
					<p>Don't have an account? <a href="register">Create an account</a></p>
				</div>
				<div class="abc">
					<p>Go to <a href="home">home</a> Page</p><a href="home">
				</div>
			</form>
		</div>
	</div>
</body>

</html>