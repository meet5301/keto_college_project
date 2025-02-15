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
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>
      <!-- end loader -->
      <!-- header -->
       <div id="header-placeholder"></div>
      <script>
             
         fetch('header')
        .then(response => response.text())
        .then(data => {
            document.getElementById('header-placeholder').innerHTML = data;
        })
        .catch(error => console.error('Error loading header:', error));
      </script>
      <!-- end header -->
     <div class="back_re">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <!-- <div class="title">
                      <h2>Contact Us</h2>
                  </div> -->
               </div>
            </div>
         </div>
      </div>
      <!--  contact -->
      <div class="contact"style="margin-top:40px;">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <form id="request" class="main_form" action="contact" method="post">
                     @csrf
                     <div class="row">
                        <div class="col-md-12 ">
                           <input class="contactus" placeholder="Name" type="type" name="name"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Email" type="type" name="email"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Phone Number" type="type" name="phone">                          
                        </div>
                        <div class="col-md-12">
                           <textarea class="textarea" placeholder="Message" type="type" Message="Name" name="message"></textarea>
                        </div>
                        <div class="col-md-12"style="margin-bottom:20px;">
                           <button class="send_btn">Send</button>
                        </div>
                     </div>
                  </form>
               </div>
               <div class="col-md-6" >
                  <div class="map_main">
                     <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France" width="600" height="400" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end contact -->
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