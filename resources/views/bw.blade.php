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
                  <h2>Beach Wedding</h2>
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
                     Sun-kissed vows on Gujrat's sandy shores of India
                  </h3>
                  <p>Gujrat, in India, is a stunning destination for beach wedding ceremonies, with its serene beaches
                     and picturesque backwaters providing the perfect backdrop for a memorable celebration. Let’s dive a
                     little deeper into the beach wedding planning services available in this beautiful state of India.
                  </p>
                   <img src="images/56.jpg" alt="Corporate Event Management">
                     <!-- <div class="about_img text-center">
                       
                     </div> -->
                     <div class="hello">
                        <h3><b>Catering:</b></h3>
                        <p>Gujrat is known for its delicious cuisine, and no beach wedding in Kerala is complete without
                           a feast that showcases the state’s culinary delights. Melodia’s catering services in Kerala
                           specialize in local cuisine and can provide a range of menu options, including vegetarian and
                           non-vegetarian dishes. From traditional Kerala dishes to global cuisine, there’s something
                           for every palate.</p>
                        <h3><b>Identifying the venue:</b></h3>
                        <p>As mentioned before, we are comprehensive planners who take care of every aspect of your
                           event. Kerala is a beautiful region full of panoramic views and a beach with blue waters. At
                           your request, we can also book one of the wonderful beach resorts and host a wedding right
                           there on the soft sand, making it a memorable day.</p>
                        <h3><b>Photos and videos:</b></h3>
                        <p>One of the most important aspects of a wedding is capturing these precious moments on a
                           platform so that you can reminisce and be happy. Melodia conducts professional video and
                           photo shoots to capture the romance of your special day and prepare a creative presentation
                           as a ‘forever memory, immortalising every moment.</p>
                        <h3><b>Planning the wedding:</b></h3>
                        <p>A Indian wedding is an elaborate affair involving a number of elements, including people,
                           logistics, and events. It can be extremely stressful without the help of a professional
                           wedding planner. Relax and enjoy your big day as you leave this complex task to Melodia. We
                           are leading wedding planners in Kerala who specialise in all kinds of arrangements. Whether
                           it’s a traditional affair or a contemporary one, we will identify the right kind of venue on
                           the beach and arrange for all decorations, photography, catering, and any other function you
                           are looking for.</p>
                        <h3><b>Decorations:</b></h3>
                        <p>A beach wedding Planners in Kerala call for unique and creative decorations that complement
                           the natural beauty of the surroundings. From floral arrangements to lighting and other
                           decorative elements, there are several decoration services available in Kerala that
                           specialize in beach weddings. These services can help create a stunning and romantic
                           atmosphere that sets the tone for your special day.</p>
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
                              <img src="images/cru.jpg" alt="Sample Photo"
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
                                 <h3 style="color: white; margin: 10px;"><b>Cruise ship Wedding </b></h3>
                                 <button style="
               background-color: #25d366;
               color: white;
               padding: 10px 20px;
               border: none;
               border-radius: 5px;
               font-size: 16px;
               cursor: pointer;
               ">
                                    <a href="form9">Booking</a>
                                 </button>
                              </div>
                           </div>

                           <!-- Repeat for Other Photos -->
                           <div
                              style="position: relative; width: 300px; height: 200px; margin: 10px; overflow: hidden; border: 2px solid #ddd; border-radius: 8px;">
                              <img src="images/car.jpg" alt="Sample Photo"
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
                                 <h3 style="color: white; margin: 10px;"><b>wedding cars</b></h3>
                                 <button style="
               background-color: #25d366;
               color: white;
               padding: 10px 20px;
               border: none;
               border-radius: 5px;
               font-size: 16px;
               cursor: pointer;
               ">
                                    <a href="form9">Booking</a>
                                 </button>
                              </div>
                           </div>

                           <!-- Repeat for More Photos -->
                           <div
                              style="position: relative; width: 300px; height: 200px; margin: 10px; overflow: hidden; border: 2px solid #ddd; border-radius: 8px;">
                              <img src="images/live.jpg" alt="Sample Photo"
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
                                 <h3 style="color: white; margin: 10px;"><b>Live Streaming Services</b></h3>
                                 <button style="
               background-color: #25d366;
               color: white;
               padding: 10px 20px;
               border: none;
               border-radius: 5px;
               font-size: 16px;
               cursor: pointer;
               ">
                                    <a href="form9">Booking</a>
                                 </button>
                              </div>
                           </div>

                           <div
                              style="position: relative; width: 300px; height: 200px; margin: 10px; overflow: hidden; border: 2px solid #ddd; border-radius: 8px;">
                              <img src="images/garaba.jpg" alt="Sample Photo"
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
                                 <h3 style="color: white; margin: 10px;"><b>Wedding Dance </b></h3>
                                 <button style="
               background-color: #25d366;
               color: white;
               padding: 10px 20px;
               border: none;
               border-radius: 5px;
               font-size: 16px;
               cursor: pointer;
               ">
                                    <a href="form9">Booking</a>
                                 </button>
                              </div>
                           </div>

                           <div
                              style="position: relative; width: 300px; height: 200px; margin: 10px; overflow: hidden; border: 2px solid #ddd; border-radius: 8px;">
                              <img src="images/stage.jpg" alt="Sample Photo"
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
                                 <h3 style="color: white; margin: 10px;"><b>Stage Decoration</b></h3>
                                 <button style="
               background-color:rgb(55, 199, 108);
               color: white;
               padding: 10px 20px;
               border: none;
               border-radius: 5px;
               font-size: 16px;
               cursor: pointer;
               ">

                                    <a href="form9">Booking</a>


                                 </button>
                              </div>
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