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
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
      <style>
         /* Paragraph styling */
         p {
            text-align: justify;
            font-size: 18px;
            margin: 15px 0; /* Spacing between paragraphs */
            line-height: 1.7; /* Improved readability */
            font-family: "jost", sans-serif; /* Consistent font */
            color: #333; /* Neutral color */
         }
         h3{
            font-family: "jost", sans-serif;
            font-size: 22px; 
         }

         /* Uniform image styling */
         .about_content img {
            /* width: 130%; Responsive image size */
            width: 2000px; /* Maximum width */
            height: 130%; /* Maintain aspect ratio */
            border-radius: 10px; /* Rounded corners */
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); /* Soft shadow */
             margin: auto auto; /*Centered with spacing */
            display: block; /* Ensures block alignment */
         }
      </style>
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.html"><img src="images/logo.png" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item ">
                                 <a class="nav-link" href="home">Home</a>
                              </li>
                              <li class="nav-item ">
                                 <a class="nav-link" href="about">About</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="room">Our Events</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="gallery">Gallery</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="contact">Contact Us</a>
                              </li>
                              <?php 
                                 if(session()->has('username'))
                                 {
                              ?>
                                 <li class="nav-item">
                                    <a class="nav-link" href="logout">Logout</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link">{{session('username')}}</a>
                                 </li>
                              <?php
                                 }
                                 else
                                 {
                              ?>
                                 <li class="nav-item">
                                    <a class="nav-link" href="login">Login</a>
                                 </li>
                              <?php
                                 }
                              ?>
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <div class="back_re">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="title">
                     <h2>Private Parties</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- about -->
      
      <!-- about -->
      <div class="about_section">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="about_content">
                     <h3 style="font-family: Montserrat, sans-serif; padding-top:30px; font-size: 2rem; font-weight: bold; color: #333;">
                     Exclusive soirées amidst Gujrat breathtaking backdrops  
                     </h3>
                                 <p>Melodia Event Management provides private party organising services where we specialise in planning and executing events of various types, including private parties in Gujrat.</p>
                                 <p>The services can vary depending on the client’s specific needs and requirements of the clients. Some common services offered by us for private parties Kerala may include: </p>
                                 <p>Planning the event: Our planners provide private party services in Kerala along with planning and coordination of the entire occasion. We help you in choosing the ideal location, contracting and managing vendors, and take care of inviting the guests and RSVPs. Developing timetables, and other specifics are also taken care of by our managers. They ensure that the event goes smoothly without a hitch and according to schedule.</p>

                     <img src="images/301.jpg" alt="Corporate Event Management" >
                     <!-- <div class="about_img text-center">
                        
                     </div> -->
                                    <p>Theme development and décor: Melodia Event Management Company, Kerala work closely with clients to develop a theme for their private party, whether it’s a formal affair, a casual get-together, or something in between. We also create a cohesive décor plan that fits with the theme, including decorations, flowers, and lighting.</p>
                                    <p>Catering and bar services: Many event management companies have partnerships with catering and bar services, and can coordinate these services for clients. This may include menu selection, food and drink service, and cleanup.</p>
                                    <p>Entertainment and music: Entertainment and music for the private party is arranged, whether it’s a DJ, live music band, or other type of performance. We set up the lighting and sound equipment to enhance the experience.</p>
                                    <p>Photos and videos: Memories are important even if you are hosting a private party. That’s what parties are for! We assist in organising videographers and photographers who will capture the right moments, which you can treasure for years to come.</p>
                                    <p>Transportation: We arrange transportation for your guests, whether it’s a limousine, party bus, or shuttle service. Parking is also planned and scheduled accordingly. We will ensure that the guests arrive and depart safely to and from the venue.</p>

                    <div>
                    <a class="read_more" href="blog" style="margin-bottom:15px;"> Booking </a>
                    </div>
            </div>
            </div>
         </div>
      </div>
   </div>
</div>
      <!-- end about -->
     

      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class=" col-md-4">
                     <h3>Contact US</h3>
                     <ul class="conta">
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i> Address</li>
                        <li><i class="fa fa-mobile" aria-hidden="true"></i> +01 1234569540</li>
                        <li> <i class="fa fa-envelope" aria-hidden="true"></i><a href="#"> demo@gmail.com</a></li>
                     </ul>
                  </div>
                  <div class="col-md-4">
                     <h3>Menu Link</h3>
                     <ul  class="link_menu">
                        <li><a href="home">Home</a></li>
                        <li  ><a href="about"> about</a></li>
                        <li><a href="room">Our Room</a></li>
                        <li><a href="gallery">Gallery</a></li>
                        <li><a href="contact">Contact Us</a></li>
                     </ul>
                  </div>
                  <div class="col-md-4">
                     <h3>News letter</h3>
                     <form class="bottom_form">
                        <input class="enter" placeholder="Enter your email" type="text" name="Enter your email">
                        <button class="sub_btn">subscribe</button>
                     </form>
                     <ul class="social_icon">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
            
         </div>
      </footer>
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