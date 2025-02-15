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
         body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;           
        }
 

        /* Responsive Design */
        @media (max-width: 768px) {
            .section {
                flex-direction: column;
                text-align: center;
            }

            .section img, .text {
                width: 100%;
            }
        }
      
            
               form {
                  max-width: 500px;
                  margin: auto;
                  padding: 20px;
                  background: #fff;
                  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
                  border-radius: 5px;
               }

               form h2 {
                  text-align: center;
                  color: #333;
               }

               .form-group {
                  margin-bottom: 15px;
               }

               label {
                  display: block;
                  font-weight: bold;
                  margin-bottom: 5px;
               }

               input,
               select,
               button {
                  width: 100%;
                  padding: 10px;
                  margin: 5px 0;
                  border: 1px solid #ccc;
                  border-radius: 5px;
               }

               button {
                  cursor: pointer;
                  background-color: #4CAF50;
                  color: #fff;
                  border: none;
               }

               button.reset {
                  background-color: #f44336;
               }

               button:hover {
                  opacity: 0.9;
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
      
         <div class="row">
            <div class="col-md-12">
               <!-- <div class="title">
                  <h2>booking</h2>
               </div> -->
            </div>
         </div>
      
   </div>
   
   <div style="background-color:">
      <form>

         <html lang="en">


         <body>
            <form action="/submit-booking" method="post">
               <h2>Event Booking Form</h2>

               <div class="form-group">
                  <label for="name">Name:</label>
                  <input type="text" id="name" name="name" required>
               </div>

               <div class="form-group">
                  <label for="contact">Contact Number:</label>
                  <input type="tel" id="contact" name="contact" required>
               </div>

               <div class="form-group">
                  <label for="equipment">Equipment:</label>
                  <input type="text" id="equipment" name="equipment" placeholder="E.g., Speakers, Projector">
               </div>

               <div class="form-group">
                  <label for="event-type">Event Type:</label>
                  <select id="event-type" name="event_type" required>
                     <option value="">--Select Event Type--</option>
                     <option value="wedding">Wedding</option>
                     <option value="corporate">Corporate</option>
                     <option value="birthday">Birthday</option>
                     <option value="conference">Conference</option>
                     <option value="other">Other</option>
                  </select>
               </div>

               <div class="form-group">
                  <label for="food-type">Food Type:</label>
                  <select id="food-type" name="food_type" required>
                     <option value="">--Select Food Type--</option>
                     <option value="veg">Vegetarian</option>
                     <option value="non-veg">Non-Vegetarian</option>
                     <option value="mixed">Mixed</option>
                  </select>
               </div>

               <div class="form-group">
                  <label for="place">Place:</label>
                  <input type="text" id="place" name="place" required>
               </div>

               <div class="form-group">
                  <label for="number-people">Number of People:</label>
                  <input type="number" id="number-people" name="number_people" min="1" required>
               </div>

               <div class="form-group">
                  <label for="date">Date:</label>
                  <input type="date" id="date" name="date" required>
               </div>

               <div class="form-group">
                  <button type="submit">Book</button>
                 

                  <button type="reset" class="reset">Reset</button>
               </div>
            </form>
           
         </body>


         <closeform></closeform>
      </form>

   </div>
   <!-- end blog -->

  <!--  footer -->
  <!-- <div id="footer-placeholder"></div>
      <script>
             // Fetch footer.html and insert it into the footer-placeholder div
         fetch('footer')
        .then(response => response.text())
        .then(data => {
            document.getElementById('footer-placeholder').innerHTML = data;
        })
        .catch(error => console.error('Error loading footer:', error));
      </script> -->
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