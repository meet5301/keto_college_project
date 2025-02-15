<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="/css/lr.css">
</head>
<body>
    <div class="container">
		<div class="box-edit"> 
            <h1>Edit</h1> 
            
            <form action="/Edit" method="post">
              @csrf
              {{method_field('PUT')}}
              <input type="hidden" required name="id" value="{{$data['id']}}">   
              <label>First Name</label>
              <input type="text" placeholder="" name="fname" value="{{$data['fname']}}"  required/>
              <label>Last Name</label>
              <input type="text" placeholder="" name="lname" value="{{$data['lname']}}"   />
              <label>Username</label>
              <input type="text" placeholder="" name="username" value="{{$data['username']}}"  />
              <label>Email</label>
              <input type="email" placeholder="" name="email" value="{{$data['email']}}"   />
              <!-- <label>Password</label> -->
              <!-- <input type="password" placeholder="" name="pass" required />
              <label>Confirm Password</label>
              <input type="password" placeholder="" name="c_pass" required /> -->
              <input type="submit" class="btn" value="Edit" name="Edit"/>
              @if($errors->any())
                <span style="color: red;"><h4>{{$errors->first()}}</h4></span>
              @endif
            <closeform></closeform></form>
    	</div>
    	
	</div>
</body>
</html>