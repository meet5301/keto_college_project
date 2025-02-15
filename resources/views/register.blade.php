<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 125px;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: #f9f9f9;
    }

    .container {
      display: flex;
      background: #fff;
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      width: 800px;
      max-width: 100%;
    }

    .form-section {
      flex: 1;
      padding: 30px;
    }

    .form-section h2 {
      font-size: 24px;
      margin-bottom: 20px;
      color: #333;
    }

    .form-group {
      margin-bottom: 15px;
    }

    .form-group label {
      display: block;
      margin-bottom: 5px;
      font-size: 14px;
      color: #555;
    }

    .form-group input {
      width: 100%;
      padding: 10px;
      font-size: 14px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .form-group input:focus {
      border-color: #007BFF;
      outline: none;
    }

    .form-group .checkbox-group {
      display: flex;
      align-items: center;
    }

    .form-group .checkbox-group input {
      margin-right: 10px;
    }

    .form-group .checkbox-group label {
      margin: 0;
      font-size: 14px;
    }

    .register-btn {
      display: block;
      width: 100%;
      padding: 10px;
      font-size: 16px;
      background: #007BFF;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      text-align: center;
    }

    .register-btn:hover {
      background: #0056b3;
    }

    .already-member {
      text-align: center;
      margin-top: 15px;
    }

    .already-member a {
      color: #007BFF;
      text-decoration: none;
    }

    .already-member a:hover {
      text-decoration: underline;
    }

    .illustration-section {
      flex: 1;
      background: #f9f9f9;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .illustration-section img {
      max-width: 80%;
      height: auto;
    }
  </style>
</head>

<body>
  <div class="container">

    <div class="form-section">
      <h2>Sign up</h2>
      <form action="register" method="post">
        @csrf
        <div class="form-group">
          <label for="first-name">First Name</label>
          <input type="text" placeholder="" name="fname" required />
        </div>
        <div class="form-group">
          <label for="last-name">Last Name</label>
          <input type="text" placeholder="" name="lname" required />
        </div>
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" placeholder="" name="username" required />
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" placeholder="" name="email" required />
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" placeholder="" name="pass" required />
        </div>
        <div class="form-group">
          <label for="confirm-password">Repeat your password</label>
          <input type="password" placeholder="" name="c_pass" required />
        </div>

        <button type="submit" class="register-btn" value="Submit" name="sub">Register</button>
        @if($errors->any())
      <span style="color: red;">
        <h4>{{$errors->first()}}</h4>
      </span>
    @endif
        <closeform></closeform>
      </form>
      <div class="already-member">
        <p>I am already member. <a href="login">Login</a></p>
      </div>
    </div>
    <div class="illustration-section">
      <img src="images/signup-image.jpg" style="margin-left:20px;">
    </div>
  </div>
</body>

</html>