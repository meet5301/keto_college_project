<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Header</title>
</head>

<body style="margin: 0; font-family: Arial, sans-serif; background-color: black; color: white;">
   <!-- Header -->
   <header style="position: relative; background: url('images/bk.jpg') no-repeat center center/cover; height: 350px; padding: 0;">
      <!-- Black Blur Overlay -->
      <div
         style="position: absolute; top: 0; left: 0; width: 100%; height: 350px; background-color: rgba(62, 57, 57, 0.7); filter: blur(5px); z-index: 1;">
      </div>

      <!-- Content Section -->
      <div
         style="position: relative; z-index: 2; width: 100%; max-width: 1200px; margin: 0 auto; display: flex; justify-content: space-between; align-items: center; padding: 10px 20px;">
         <!-- Logo Section -->
         <div style="flex: 1; display: flex; align-items: center;">
            <a href="index.html" style="display: inline-block;">
               <img src="images/logo.png" alt="Logo" style="max-height: 60px;">
            </a>
         </div>
         <!-- Navigation -->
         <nav style="flex: 3; display: flex; justify-content: flex-end; gap: 20px; align-items: center; font-size: 16px; margin-left:10px;">
            <a href="home" style="text-decoration: none; color: white; font-weight: bold;">Home</a>
            <a href="event" style="text-decoration: none; color: white; font-weight: bold;">Our Events</a>
            <a href="gallery" style="text-decoration: none; color: white; font-weight: bold;">Gallery</a>
            <a href="food" style="text-decoration: none; color: white; font-weight: bold;">Foods</a>
            <a href="contact" style="text-decoration: none; color: white; font-weight: bold;">Contact Us</a>
            
            <?php 
                                 if (session()->has('username')) {
                              ?>
                  <li style="text-decoration: none; color: white; font-weight: bold; ">
                     <a style="color:white;" href="logout">Logout</a>
                  </li>
                  <li style="text-decoration: none; color: white; font-weight: bold;">
                     <a style="color:white;">{{session('username')}}</a>
                  </li>
                  <?php
} else {
                              ?>
                  <li style="text-decoration: none; color: white; font-weight: bold;">
                     <a style="color:white;" href="login">Login</a>
                  </li>
                  <?php
}
                              ?>
         </nav>
      </div>

      <!-- Hero Section -->
      <div style="position: relative; z-index: 2; text-align: center; padding: 50px 20px; color: white;">
         <h1 style="font-size: 40px; font-weight: bold; margin-bottom: 20px; color:rgba(238, 235, 235, 0.97);">Partner with Melodia Event Management in Gujrat</h1>
         <p style="font-size: 20px; margin-bottom: 30px;">Gujarat's #1 Exclusive Event Company</p>
         <a href="contact"
            style="background-color: #6C63FF; color: white; text-decoration: none; padding: 15px 30px; border-radius: 5px; font-size: 18px;">Contact
            Us</a>
      </div>
   </header>
</body>

</html>