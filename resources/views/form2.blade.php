<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="css/lr.css">
</head>
<body>
	

		<div class="okkk">
	
    <div class="container">
		<div class="box-log"> 
      		<h1>Login</h1>
    		<form action="login" method="post">
				@csrf
        		<label>Username</label>
        		<input type="text" placeholder="" name="username" required />
    			<label>Password</label>
				<input type="password" placeholder="" name="pass" required />
   	 			<input type="submit" class="btn" value="Submit" name="sub"/>
				@if($errors->any())
    				<span style="color: red;"><h4>{{$errors->first()}}</h4></span>
    			@endif
  				<closeform></closeform></form>
    	</div>
    	<p class="para-2">
  			Don't have an account? <a href="register">Sign Up Here</a><br><br>
            Return to <a href="home">Home</a>?
		</p>
	</div>
	</div>
	<div id="footer-placeholder"></div>
      <script>
         // Fetch footer.html and insert it into the footer-placeholder div
         fetch('footer')
            .then(response => response.text())
            .then(data => {
               document.getElementById('footer-placeholder').innerHTML = data;
            })
            .catch(error => console.error('Error loading footer:', error));
      </script>
</body>
</html> 