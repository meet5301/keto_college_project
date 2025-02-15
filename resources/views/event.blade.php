<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Keto</title>

   <!-- External CSS -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/responsive.css">
   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
      media="screen">

   <!-- Internal CSS -->
   <style>
      /* Full-page background */
      /* Blur Background Image */
      body::before {
         content: "";
         position: fixed;
         top: 0;
         left: 0;
         width: 100%;
         height: 100%;
         background: url('images/101.jpg') no-repeat center center fixed;
         background-size: cover;
         filter: blur(5px);
         z-index: -1;
      }


      /* Main container (smaller size) */
      .container-wrapper {
         max-width: 1200px;
         margin: 30px auto;
         padding: 20px;
         background: rgba(214, 144, 144, 0.3);
         backdrop-filter: blur(10px);
         border-radius: 15px;
         box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
      }

      /* 3 columns layout */
      .room-container {
         display: grid;
         grid-template-columns: repeat(3, 1fr);
         gap: 20px;
      }

      /* Room styling */
      .room {
         background: rgba(255, 255, 255, 0.6);
         padding: 10px;
         border-radius: 10px;
         text-align: center;
         position: relative;
         transition: transform 0.3s ease;
      }

      .room:hover {
         transform: scale(1.05);
      }

      /* Room image */
      .room_img {
         width: 100%;
         border-radius: 5px;
         overflow: hidden;
      }

      .room_img img {
         width: 2600px;
         height: 220px;
         object-fit: cover;
         border-radius: 5px;
         transition: transform 0.3s ease;
      }

      /* Room name always visible */
      .bed_room {
         font-size: 18px;
         font-weight: bold;
         color: #333;
         margin-top: 10px;
      }

      /* Read More button (hidden initially) */
      .read_more {
         display: block;
         text-decoration: none;
         color: white;
         background-color: rgb(30, 31, 30);
         padding: 8px 15px;
         border-radius: 5px;
         transition: opacity 0.3s ease;
         width: 80%;
         margin: 10px auto 0;
         opacity: 0;
      }

      /* Show button on hover */
      .room:hover .read_more {
         opacity: 1;
      }
   </style>
</head>

<body class="main-layout">

   <!-- Header -->
   <div id="header-placeholder"></div>
   <script>
      fetch('header')
         .then(response => response.text())
         .then(data => {
            document.getElementById('header-placeholder').innerHTML = data;
         })
         .catch(error => console.error('Error loading header:', error));
   </script>

   <!-- Main Content -->
   <div class="container-wrapper">
      <div class="room-container">

         <!-- Room 1 -->
         <div class="room">
            <div class="room_img">
               <figure><img src="images/505.jpg" alt="#" /></figure>
            </div>
            <div class="bed_room">Corporate Event</div>
            <a class="read_more" href="coro">Learn more</a>
         </div>

         <!-- Room 2 -->
         <div class="room">
            <div class="room_img">
               <figure><img src="images/506.jpg" alt="#" /></figure>
            </div>
            <div class="bed_room">Wedding Planners</div>
            <a class="read_more" href="wed">Learn more</a>
         </div>

         <!-- Room 3 -->
         <div class="room">
            <div class="room_img">
               <figure><img src="images/10.jpg" alt="#" /></figure>
            </div>
            <div class="bed_room">Music & Entertainment</div>
            <a class="read_more" href="mue">Learn more</a>
         </div>

         <!-- Room 4 -->
         <div class="room">
            <div class="room_img">
               <figure><img src="images/61.jpg" alt="#" /></figure>
            </div>
            <div class="bed_room">Private Parties</div>
            <a class="read_more" href="pp">Learn more</a>
         </div>

         <!-- Room 5 -->
         <div class="room">
            <div class="room_img">
               <figure><img src="images/52.jpg" alt="#" /></figure>
            </div>
            <div class="bed_room">Destination Weddings</div>
            <a class="read_more" href="dw">Learn more</a>
         </div>

         <!-- Room 6 -->
         <div class="room">
            <div class="room_img">
               <figure><img src="images/57.jpg" alt="#" /></figure>
            </div>
            <div class="bed_room">Beach Wedding</div>
            <a class="read_more" href="bw">Learn more</a>
         </div>

      </div>
   </div>

   <!-- Footer -->
   <div id="footer-placeholder"></div>
   <script>
      fetch('footer')
         .then(response => response.text())
         .then(data => {
            document.getElementById('footer-placeholder').innerHTML = data;
         })
         .catch(error => console.error('Error loading footer:', error));
   </script>

   <!-- Javascript files -->
   <script src="js/jquery.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery-3.0.0.min.js"></script>
   <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="js/custom.js"></script>

</body>

</html>