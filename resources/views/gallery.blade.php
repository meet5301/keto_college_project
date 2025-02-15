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
   <link rel="stylesheet" href="css/blur-background.css">
   <style>
      body::before {
         content: "";
         position: fixed;
         top: 0;
         left: 0;
         width: 100%;
         height: 100%;
         background: url('images/A29.jpg') no-repeat center center fixed;
         background-size: cover;
         filter: blur(5px);
         z-index: -1;
      }

      .container-wrapper {
         max-width: 1200px;
         margin: 30px auto;
         margin-bottom: 100px;
         padding: 20px;
         padding-top: 50px;
         background: rgba(214, 144, 144, 0.3);
         backdrop-filter: blur(10px);
         border-radius: 15px;
         box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
      }
   </style>
</head>
<!-- body -->

<body class="main-layout inner_page">
   <!-- loader  -->
   <div class="loader_bg">
      <div class="loader"><img src="images/loading.gif" alt="#" /></div>
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
                    <h2>gallery</h2>
                  </div> -->
               </div>
            </div>
         </div>
      </div>
      <!-- gallery -->
      <div class="gallery">
      <div class="container-wrapper">
         <div class="container">

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
                     <figure><img src="images/3.jpg" alt="#" /></figure>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="images/17.jpg" alt="#" /></figure>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="images/8.jpg" alt="#" /></figure>
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