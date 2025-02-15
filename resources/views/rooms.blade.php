<html>
<head>
<!-- site icon -->
   <link rel="icon" href="images/fevicon.png" type="image/png" />
   <!-- Bootstrap core CSS -->
   <link href="css/bootstrap.css" rel="stylesheet">
   <!-- FontAwesome Icons core CSS -->
   <link href="css/font-awesome.min.css" rel="stylesheet">
   <!-- Custom animate styles for this template -->
   <link href="css/animate.css" rel="stylesheet">
   <!-- Custom styles for this template -->
   <link href="style.css" rel="stylesheet">
   <!-- Responsive styles for this template -->
   <link href="css/responsive.css" rel="stylesheet">
   <!-- Colors for this template -->
   <link href="css/colors.css" rel="stylesheet">
   <!-- light box gallery -->
   <link href="css/ekko-lightbox.css" rel="stylesheet">
   
   <style>
    body {
      font-family: Arial, sans-serif;
      background-image: url('images/blog1.jpg');
      background-size: cover;
	  height: auto;
      background-position: center;
    }
    
    .container {
      width: 300px;
      padding: 10px;
      background-color: #fff;
      margin: 0 200px;
      margin-top: 30px;
      margin-left:470px ;
      border-radius: 5px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }
    
    h2, h6 {
      text-align: center;
    }
    
    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }
    
    button {
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width:100%;
    }
    
    button:hover {
      opacity: 0.8;
    }
  </style>
   </head>
	<div class="container">
    <h2>Manage Room`s</h2>
    <form method="POST" action="rooms">
    @csrf
    <label>Room Name</label>
	  <input type="text" name="rooms_name" required>
      
      <label>Image</label>
      <input type="file" name="rooms_image" required>
	  
	   <label>Price</label>
      <input type="text" name="price" required> 
	  
	  <label>Detail</label>
      <input type="text" name="details" required> 
      
      <button type="submit" name="sub">Submit</button>
      <h6>Go to <a href="roomdis">Display</a> or <a href="admin">Home</a></h6>
    </form>
  </div>
</html>