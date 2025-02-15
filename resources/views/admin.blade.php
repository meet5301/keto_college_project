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
   <link rel="stylesheet" href="/css/style.css">
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

<body class="main-layout">
   <!-- loader  -->
   <div class="loader_bg">
      <div class="loader"><img src="images/loading.gif" alt="#" /></div>
   </div>
   <!-- end loader -->
   <!-- header -->
   <style>
      /* body
         {
            background-image: url('images/503.jpg');
            background-size: cover;
               
         } */

      
      
   </style>

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
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04"
                        aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                     </button>
                     <div class="collapse navbar-collapse" id="navbarsExample04">
                        <ul class="navbar-nav mr-auto">
                           <li class="nav-item active">
                              <a class="nav-link" href="admin">Home</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="#">Booking</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="user">Users</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="rooms">Events</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="cont">Contact</a>
                           </li>
                           
                           <?php 
                                 if (session()->has('username')) {
                              ?>

                           <li class="nav-item">
                              <a class="nav-link" href="logout">Logout</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link">{{session('username')}}</a>
                           </li>
                           <?php
} else {
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
   <div >
      <img  src="images/A23.jpg" style="height: 499.5px; width:100%;">
      <div
                     style="position: absolute; top: 45%; left: 5%; transform: translateY(-50%); color: white; font-size: 3rem; font-weight: bold; text-align: left; line-height: 1.2; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">
                     <p style="color:lightblack ;top: 15%;"></p>
                     Event Management Admin<br> Streamlining Processes<br> for Perfect Events

                    
                      <br>  <a class="read_more" href="home" style="margin-bottom:15px; padding-top:13px; padding-bottom :13px;"> User Show </a>
                     </div>
                  </div>
   </div>
   <!-- Javascript files-->
   <script src="js/jquery.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery-3.0.0.min.js"></script>
   <!-- sidebar -->
   <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="js/custom.js"></script>
</body>

</html>