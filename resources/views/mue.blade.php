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
                  <h2>Music & Entertainment</h2>
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
                     Rhythmic beats and vibrant melodies
                  </h3>
                  <p>When it comes to event management, music and entertainment in Kerala are like the cherry on top of
                     a perfectly baked cake. They provide the extra bit of flavour that makes the event truly memorable
                     and enjoyable for all guests.</p>
                  <p>Live music bands or solo musicians are a great way to add an element of live performance to the
                     event. Imagine a jazz band serenading guests as they sip on cocktails or a rock band pumping up the
                     crowd with their energy and stage presence. Live music can set the tone and create an atmosphere
                     that guests will never forget.</p>
                  <p>DJ services are another popular music and entertainment in Kerala, it is the best option for
                     events. DJs can play a mix of songs that cater to the guests’ preferences and get everyone dancing.
                     They can give the celebration a twist when they add their own remixes making it distinctive.</p>

                  <img src="images/2.jpg" alt="Corporate Event Management">
                  <!-- <div class="about_img text-center">
                        
                     </div> -->
                  <div class="hello">

                     <p>Here are some other things we at Melodia Event Management, Kerala, consider when we provide
                        music and entertainment services:</p>
                     <p>Types of Events: Different types of events may require different kinds of music and
                        entertainment in Kerala. For example, a corporate event may require more subtle and
                        sophisticated music, while a party or wedding may require more lively and upbeat music.</p>
                     <p>Selecting the right music for any event is extremely important. We have to make sure that it
                        fits the occasion and the ambience. Music has the ability to set the mood of the event and that
                        is why it is crucial to select something according to the target audience’s tastes.</p>
                     <p>DJs are always in high demand, because of their diverse sense of music and mixing. They just
                        keep the party going. Melodia’s expert planners pick someone with enough knowledge, experience
                        and understanding of the overall event.</p>
                     <p>Lights can enhance the entire look of the occasion. Besides, it also improves the overall
                        atmosphere of the event. We bring in the best technicians to set up the right lighting and audio
                        – they use high-quality and well-configured equipment, so that everything runs smoothly.</p>

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
                              <img src="images/garbanight.jpg" alt="Sample Photo"
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
                                 <h3 style="color: white; margin: 10px;"><b>Garba Night </b></h3>
                                 <button style="
               background-color: #25d366;
               color: white;
               padding: 10px 20px;
               border: none;
               border-radius: 5px;
               font-size: 16px;
               cursor: pointer;
               ">
                                    <a href="form6">Booking</a>
                                 </button>
                              </div>
                           </div>

                           <!-- Repeat for Other Photos -->
                           <div
                              style="position: relative; width: 300px; height: 200px; margin: 10px; overflow: hidden; border: 2px solid #ddd; border-radius: 8px;">
                              <img src="images/livemusic.jpg" alt="Sample Photo"
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
                                 <h3 style="color: white; margin: 10px;"><b>Live Music</b></h3>
                                 <button style="
               background-color: #25d366;
               color: white;
               padding: 10px 20px;
               border: none;
               border-radius: 5px;
               font-size: 16px;
               cursor: pointer;
               ">
                                    <a href="form6">Booking</a>
                                 </button>
                              </div>
                           </div>

                           <!-- Repeat for More Photos -->
                           <div
                              style="position: relative; width: 300px; height: 200px; margin: 10px; overflow: hidden; border: 2px solid #ddd; border-radius: 8px;">
                              <img src="images/dj.jpg" alt="Sample Photo"
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
                                 <h3 style="color: white; margin: 10px;"><b>Dj Concert</b></h3>
                                 <button style="
               background-color: #25d366;
               color: white;
               padding: 10px 20px;
               border: none;
               border-radius: 5px;
               font-size: 16px;
               cursor: pointer;
               ">
                                    <a href="form6">Booking</a>
                                 </button>
                              </div>
                           </div>

                           <div
                              style="position: relative; width: 300px; height: 200px; margin: 10px; overflow: hidden; border: 2px solid #ddd; border-radius: 8px;">
                              <img src="images/artist.jpg" alt="Sample Photo"
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
                                 <h3 style="color: white; margin: 10px;"><b>Music Artists / Singer</b></h3>
                                 <button style="
               background-color: #25d366;
               color: white;
               padding: 10px 20px;
               border: none;
               border-radius: 5px;
               font-size: 16px;
               cursor: pointer;
               ">
                                    <a href="form6">Booking</a>
                                 </button>
                              </div>
                           </div>

                           <div
                              style="position: relative; width: 300px; height: 200px; margin: 10px; overflow: hidden; border: 2px solid #ddd; border-radius: 8px;">
                              <img src="images/south.jpg" alt="Sample Photo"
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
                                 <h3 style="color: white; margin: 10px;"><b>Cultura Dance</b></h3>
                                 <button style="
               background-color:rgb(55, 199, 108);
               color: white;
               padding: 10px 20px;
               border: none;
               border-radius: 5px;
               font-size: 16px;
               cursor: pointer;
               ">

                                    <a href="form6">Booking</a>


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