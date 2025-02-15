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
   <style>
      /* Paragraph styling */
      p {
         /* text-align: justify; */
         font-size: 18px;
         margin: 15px 0;
         /* Spacing between paragraphs */
         line-height: 1.7;
         /* Improved readability */
         font-family: "jost", sans-serif;
         /* Consistent font */
         /* color: #333; */
         /* Neutral color */
      }

      h3 {
         font-family: "jost", sans-serif;
         font-size: 22px;
      }

      /* Uniform image styling */
      .about_content img {
         /* width: 130%; Responsive image size */
         width: 2000px;
         /* Maximum width */
         height: 130%;
         /* Maintain aspect ratio */
         border-radius: 10px;
         /* Rounded corners */
         box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
         /* Soft shadow */
         margin: auto auto;
         /*Centered with spacing */
         display: block;
         /* Ensures block alignment */
      }

      .hello {
         margin: 25px;
      }
   </style>
</head>
<!-- body -->

<body class="main-layout">
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
                  <h2>Private Parties</h2>
               </div> -->
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
                  <h3
                     style="font-family: Montserrat, sans-serif; padding-top:30px; font-size: 2rem; font-weight: bold; color: #333;">
                     Exclusive soirées amidst Gujrat breathtaking backdrops
                  </h3>
                  <p>Melodia Event Management provides private party organising services where we specialise in planning
                     and executing events of various types, including private parties in Gujrat.</p>
                  <p>The services can vary depending on the client’s specific needs and requirements of the clients.
                     Some common services offered by us for private parties Kerala may include: </p>
                  <p>Planning the event: Our planners provide private party services in Kerala along with planning and
                     coordination of the entire occasion. We help you in choosing the ideal location, contracting and
                     managing vendors, and take care of inviting the guests and RSVPs. Developing timetables, and other
                     specifics are also taken care of by our managers. They ensure that the event goes smoothly without
                     a hitch and according to schedule.</p>

                  <img src="images/301.jpg" alt="Corporate Event Management">
                  <!-- <div class="about_img text-center">
                        
                     </div> -->
                  <div class="hello">
                     <p>Theme development and décor: Melodia Event Management Company, Kerala work closely with clients
                        to develop a theme for their private party, whether it’s a formal affair, a casual get-together,
                        or something in between. We also create a cohesive décor plan that fits with the theme,
                        including decorations, flowers, and lighting.</p>
                     <p>Catering and bar services: Many event management companies have partnerships with catering and
                        bar services, and can coordinate these services for clients. This may include menu selection,
                        food and drink service, and cleanup.</p>
                     <p>Entertainment and music: Entertainment and music for the private party is arranged, whether it’s
                        a DJ, live music band, or other type of performance. We set up the lighting and sound equipment
                        to enhance the experience.</p>
                     <p>Photos and videos: Memories are important even if you are hosting a private party. That’s what
                        parties are for! We assist in organising videographers and photographers who will capture the
                        right moments, which you can treasure for years to come.</p>
                     <p>Transportation: We arrange transportation for your guests, whether it’s a limousine, party bus,
                        or shuttle service. Parking is also planned and scheduled accordingly. We will ensure that the
                        guests arrive and depart safely to and from the venue.</p>
                  </div>
                  <div>
                     <a class="read_more" href="booking" style="margin-bottom:15px;"> Booking </a>
                     <a class="read_wp" href=" https://wa.me/918200449139?text=Hello%20I20want%20to%20learn%20more%20about%20your%20services!" style="margin-bottom:15px;" target="_blank"> Whatsapp us </a>

                  </div>
                  <div style="
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      justify-content: center;
      align-items: center;
      margin: 20px;
   ">
                     <!-- Reusable Photo Block -->
                     <div
                        style="position: relative; width: 300px; height: 200px; margin: 10px; overflow: hidden; border: 2px solid #ddd; border-radius: 8px;">
                        <!-- Photo -->
                        <img src="images/50.jpg" alt="Sample Photo"
                           style="width: 100%; height: 100%; object-fit: cover; display: block;">
                        <!-- Hover Effect -->
                        <div style="
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
         " onmouseover="this.style.opacity='1'" onmouseout="this.style.opacity='0'">
                           <h3 style="color: white; margin: 10px;"><b>Theme Parties</b></h3>
                           <button style="
               background-color: #25d366;
               color: white;
               padding: 10px 20px;
               border: none;
               border-radius: 5px;
               font-size: 16px;
               cursor: pointer;
               ">
                              <a  href="form7">Booking</a>
                           </button>
                        </div>
                     </div>

                     <!-- Repeat for Other Photos -->
                     <div
                        style="position: relative; width: 300px; height: 200px; margin: 10px; overflow: hidden; border: 2px solid #ddd; border-radius: 8px;">
                        <img src="images/get.jpg" alt="Sample Photo"
                           style="width: 100%; height: 100%; object-fit: cover; display: block;">
                        <div style="
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
         " onmouseover="this.style.opacity='1'" onmouseout="this.style.opacity='0'">
                           <h3 style="color: white; margin: 10px;"><b>Get Together</b></h3>
                           <button style="
               background-color: #25d366;
               color: white;
               padding: 10px 20px;
               border: none;
               border-radius: 5px;
               font-size: 16px;
               cursor: pointer;
               ">
                              <a  href="form7">Booking</a>
                           </button>
                        </div>
                     </div>

                     <!-- Repeat for More Photos -->
                     <div
                        style="position: relative; width: 300px; height: 200px; margin: 10px; overflow: hidden; border: 2px solid #ddd; border-radius: 8px;">
                        <img src="images/alumani.jpg" alt="Sample Photo"
                           style="width: 100%; height: 100%; object-fit: cover; display: block;">
                        <div style="
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
         " onmouseover="this.style.opacity='1'" onmouseout="this.style.opacity='0'">
                           <h3 style="color: white; margin: 10px;"><b>Alumni Meet</b></h3>
                           <button style="
               background-color: #25d366;
               color: white;
               padding: 10px 20px;
               border: none;
               border-radius: 5px;
               font-size: 16px;
               cursor: pointer;
               ">
                              <a  href="form7">Booking</a>
                           </button>
                        </div>
                     </div>

                     <div
                        style="position: relative; width: 300px; height: 200px; margin: 10px; overflow: hidden; border: 2px solid #ddd; border-radius: 8px;">
                        <img src="images/ani.jpg" alt="Sample Photo"
                           style="width: 100%; height: 100%; object-fit: cover; display: block;">
                        <div style="
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
         " onmouseover="this.style.opacity='1'" onmouseout="this.style.opacity='0'">
                           <h3 style="color: white; margin: 10px;"><b>Anniversary Parties</b></h3>
                           <button style="
               background-color: #25d366;
               color: white;
               padding: 10px 20px;
               border: none;
               border-radius: 5px;
               font-size: 16px;
               cursor: pointer;
               ">
                              <a  href="form7">Booking</a>
                           </button>
                        </div>
                     </div>

                     <div
                        style="position: relative; width: 300px; height: 200px; margin: 10px; overflow: hidden; border: 2px solid #ddd; border-radius: 8px;">
                        <img src="images/bdy.jpg" alt="Sample Photo"
                           style="width: 100%; height: 100%; object-fit: cover; display: block;">
                        <div style="
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
         " onmouseover="this.style.opacity='1'" onmouseout="this.style.opacity='0'">
                           <h3 style="color: white; margin: 10px;"><b>Birthday Parties</b></h3>
                           <button style="
               background-color:rgb(55, 199, 108);
               color: white;
               padding: 10px 20px;
               border: none;
               border-radius: 5px;
               font-size: 16px;
               cursor: pointer;
               ">
                              
                              <a  href="form7">Booking</a>
                          
                           
                           </button>
                        </div>
                     </div>
                  </div>

               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- end about -->


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