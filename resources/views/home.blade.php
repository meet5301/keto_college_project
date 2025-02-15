<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>keto</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" href="css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
      media="screen">
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout" style="margin:0; padding: 0;">
   <!-- loader  -->
   <div class="loader_bg">
      <div class="loader"><img src="images/loading.gif" alt="#" /></div>
   </div>
   <!-- end loader -->

   <body style="margin:0; font-family: Arial, sans-serif; background-color: black; color: white;">
      <!-- Header -->
      <header
         style="position: relative; background: url('images/60.jpg') no-repeat center center/cover; height: 700px; padding: 0;">
         <!-- Black Blur Overlay -->
         <!-- <div
            style="position: absolute; top: 0; left: 0; width: 100%; height: 700px; background-color: rgba(17, 16, 16, 0.7); filter: blur(5px); z-index: 1;">
         </div> -->

         <!-- Content Section -->
         <div
            style="position: relative; z-index: 2; width: 100%; max-width: 3000px; margin-bottom:20px;  display: flex; justify-content: space-between; align-items: center; padding: 10px 20px; margin-right: 100px;">
            <!-- Logo Section -->
            <div style="flex: 1; display: flex; align-items: center; margin-left:100px;">
               <a href="index.html" style="display: inline-block;">
                  <img src="images/logo.png" alt="Logo" style="max-height: 100px;">
               </a>
            </div>
            <!-- Navigation -->

            <body class="main-layout" style="margin: 0; padding: 0;">
               <!-- Header -->


               <!-- Navigation -->
               <nav
                  style="flex: 3; display: flex; justify-content: flex-end; gap: 25px; align-items: center; font-size: 16px; margin-right:100px;">
                  <a href="home" style="text-decoration: none; color: white; font-weight: bold;">Home</a>
                  <a href="event" style="text-decoration: none; color: white; font-weight: bold;">Our Events</a>
                  <a href="gallery" style="text-decoration: none; color: white; font-weight: bold;">Gallery</a>
                  <a href="food" style="text-decoration: none; color: white; font-weight: bold;">Foods</a>
                  <a href="contact" style="text-decoration: none; color: white; font-weight: bold;">Contact Us</a>
                  </li>

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
         </div>

         <!-- Hero Section -->
         <div style="position: relative; z-index: 2; text-align: center; padding: 50px 20px; color: white;
         position: absolute; top: 35%; right: 5%; transform: translateY(-50%); color: white; font-size: 3rem; font-weight: bold; 
         text-align: right; line-height: 1.2; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);margin-top:120px;margin-left:80px;">
            <h1 style="font-size: 40px; font-weight: bold; margin-bottom: 20px; color:white;">
               <p style="color:skyblue;top: 15%;">TAKE A TRIP INTO PARADISE</p>
               Partner with Keto<br> Event Management<br>in Gujarat

               <div>
                  <a class="read_more" href="contact" style="margin-bottom:15px;"> Contact Us </a>
               </div>
         </div>
      </header>





      <!-- Header Section -->

      <body style="margin: 10px; font-family: Arial, sans-serif;">
         <div
            style="display: flex; flex-wrap: wrap; align-items: center; justify-content: space-evenly; padding: 40px; background-color: #f8f9fa; margin-top:100px; margin-right:100px; margin-left:100px;">

            <!-- Image Section -->
            <div style="flex: 1; max-width: 45%;">
               <div style="display: flex; flex-wrap: wrap; gap: 20px;">
                  <img src="images/5.jpg" alt="Event 1" style="width: 48%; height: auto; border-radius: 10px;">
                  <img src="images/41.jpg" alt="Event 2" style="width: 48%; height: auto; border-radius: 10px;">
                  <img src="images/63.jpg" alt="Event 3" style="width: 48%; height: auto; border-radius: 10px;">
                  <img src="images/10.jpg" alt="Event 4" style="width: 48%; height: auto; border-radius: 10px;">
               </div>
            </div>

            <!-- Text Section -->
            <div style="flex: 1; max-width: 45%; padding: 20px;">
               <h1 style="font-size: 2.5rem; color: #2c3e50; margin-bottom: 20px;">Unlock Your Dream Event</h1>
               <p style="font-size: 1rem; line-height: 1.6; color: #4a4a4a; margin-bottom: 20px;">
                  Our Event Management System is a comprehensive platform designed to simplify the process of planning
                  and
                  organizing events. Whether it’s weddings, corporate meetings, or private celebrations, we offer a
                  seamless experience for users to browse venues, customize themes, manage guest lists, and choose
                  tailored
                  packages. With a focus on innovation and attention to detail, our system ensures efficiency and
                  quality
                  at every step.
               </p>

               <!-- Buttons -->
               <div style="display: flex; gap: 20px;">
                  <a href="contact"
                     style="padding: 10px 20px; background-color: #6c63ff; color: #fff; border-radius: 5px; text-decoration: none; font-size: 1rem;">Talk
                     to Expert</a>
                  <a href="https://wa.me/" target="_blank"
                     style="padding: 10px 20px; background-color: #25d366; color: #fff; border-radius: 5px; text-decoration: none; font-size: 1rem;">WhatsApp
                     Us</a>
               </div>
            </div>

         </div>
      </body>
      <!-- about -->
      <!-- <div class="about">
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-5">
               <div class="titlepage">
                  <h2>About Us</h2>
                  <p>Our Event Management System is a comprehensive platform designed to simplify the
                     process of planning and organizing events. Whether it’s weddings, corporate meetings,
                     or private celebrations, we offer a seamless experience for users to browse venues,
                     customize themes, manage guest lists, and choose tailored packages. With a focus on
                     innovation and attention to detail, our system ensures efficiency and quality at every step.

                  </p>
                  <a class="read_more" href="aboutus2"> Read More</a>

               </div>
            </div>
            <div class="col-md-7">
               <div class="about_img">
                  <figure><img src="images/53.jpg" style="height:450px; width:800px;border-radius: 5%;" alt="#" />
                  </figure>
               </div>
            </div>
         </div>
      </div>
   </div> -->
      <!-- end about -->
      <!-- gallery -->
      <div class="gallery" style="margin-bottom:100px;">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>gallery</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-3 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="images/5.jpg" alt="#" /></figure>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="images/41.jpg" alt="#" /></figure>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="images/10.jpg" alt="#" /></figure>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="images/8.jpg" alt="#" /></figure>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="images/63.jpg" alt="#" /></figure>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="images/3.jpg" alt="#" /></figure>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="images/6.jpg" alt="#" /></figure>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="images/2.jpg" alt="#" /></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end gallery -->

      <!--  footer -->
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
      <!-- end footer -->

      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>

</html>