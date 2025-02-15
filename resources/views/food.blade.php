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

      /* Hover effect on the image container */
      .about_content {
         position: relative;
         width: 30%;
         border: 1px solid #ddd;
         border-radius: 10px;
         padding: 15px;
         box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
         overflow: hidden;
      }

      /* Image styling */
      .about_content img {
         width: 100%;
         border-radius: 10px;
         margin-bottom: 10px;
         transition: transform 0.3s ease;
         /* Smooth zoom-in effect */
      }

      /* Zoom effect on hover */
      .about_content:hover img {
         transform: scale(1.1);

      }

      /* Food menu (hidden by default) */
      .about_content .food-menu {
         display: none;
         position: absolute;
         top: 0;
         left: 0;
         background-color: rgba(0, 0, 0, 0.7);
         /* Semi-transparent background */
         color: #fff;
         padding: 15px;
         width: 100%;
         height: 100%;
         box-sizing: border-box;
         text-align: center;
      }

      /* Show the food menu when the image container is hovered */
      .about_content:hover .food-menu {
         display: flex;
      }

      .con {
         display: flex;
      }

      .con2 {
         display: flex;
      }

      /* Flex container for food items */
      .con,
      .con2 {
         display: flex;
         /* Flex container */
         justify-content: space-around;
         /* Space between items */
         align-items: center;
         /* Center items vertically */
         flex-wrap: wrap;
         /* Allow items to wrap if they overflow */
         gap: 5px;
         /* Add spacing between items */
         margin-top: 20px;
         margin: 10px;
         ;
         /* Add spacing from other sections */
      }

      /* Flex for header navigation */
      .navbar {
         display: flex;
         /* Flex for navigation */
         justify-content: space-between;
         /* Space out items */
         align-items: center;
         /* Center vertically */
      }

      /* Food menu container */
      .about_content {
         display: flex;
         /* Flex for content alignment */
         flex-direction: column;
         /* Stack items vertically */
         align-items: center;
         /* Center align */
         text-align: center;
         /* Center text */
      }

      /* Additional styling improvements */
      .food-menu ul {
         padding: 10px;
         list-style-type: none;
      }

      .food-menu {
         display: flex;
         flex-direction: column;
         justify-content: center;
         align-items: center;
         text-align: center;
      }

      .con,
      .con2 {
         display: flex;
         justify-content: center;
         align-items: center;
         flex-wrap: wrap;
         gap: 10px;
         /* Reduced from default spacing */
         margin-top: 10px;
         /* Reduce spacing above */
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
                  <h2>Variety Of Food</h2>
               </div> -->
            </div>
         </div>
      </div>
   </div>
   <!-- about -->

   <!-- Food 1 -->
   <div class="con">
      <div class="about_content">
         <img src="images/mexi.jpg" alt="Mexican Food">
         <div class="food-menu">
            <h3 style=" color: white;"><b>Mexican</b></h3>
            <ul>
               <li>Vegetarian Tacos</li>
               <li>Vegetable Quesadilla</li>
               <li>Chili Rellenos</li>
               <li>Bean Enchiladas</li>
               <li>Guacamole with Chips</li>
               <li>Mexican Corn Salad</li>
               <li>Vegetarian Pozole</li>
            </ul>
         </div>
      </div>
      <div class="about_content">
         <img src="images/guj.jpg" alt="Mexican Food">
         <div class="food-menu">
            <h3 style=" color: white;"><b>Gujarati</b></h3>
            <ul>
               <li>Dhokla</li>
               <li>Undhiyu</li>
               <li>Khandvi</li>
               <li>Thepla</li>
               <li>Handvo</li>
               <li>Dal Dhokli</li>
               <li>Sev Tameta</li>
            </ul>
         </div>
      </div>
      <div class="about_content">
         <img src="images/pan.jpg" alt="Mexican Food">
         <div class="food-menu">
            <h3 style=" color: white;"><b>Punjabi</b></h3>
            <ul>
               <li>Paneer Tikka</li>
               <li>Chole Bhature</li>
               <li>Sarson Ka Saag</li>
               <li>Makki Ki Roti</li>
               <li>Dal Makhani</li>
               <li>Amritsari Kulcha</li>
               <li>Aloo Paratha</li>
            </ul>
         </div>
      </div>
   </div>
   <div class="con2">
      <div class="about_content">
         <img src="images/si.jpg" alt="Mexican Food">
         <div class="food-menu">
            <h3 style=" color: white;"><b>South Indian</b></h3>
            <ul>
               <li>Idli</li>
               <li>Dosa</li>
               <li>Vada</li>
               <li>Upma</li>
               <li>Sambar</li>
               <li>Rasam</li>
               <li>Pongal</li>
            </ul>
         </div>
      </div>
      <div class="about_content">
         <img src="images/ita.jpg" alt="Mexican Food">
         <div class="food-menu">
            <h3 style=" color: white;"><b>Italian</b></h3>
            <ul>
               <li>Margherita Pizza</li>
               <li>Pasta Primavera</li>
               <li>Vegetable Lasagna</li>
               <li>Risotto</li>
               <li>Bruschetta</li>
               <li>Caprese Salad</li>
               <li>Focaccia Bread</li>
            </ul>
         </div>
      </div>
      <div class="about_content">
         <img src="images/chi.jpg" alt="Mexican Food">
         <div class="food-menu">
            <h3 style=" color: white;"><b>Chinese</b></h3>
            <ul>
               <li>Vegetable Spring Rolls</li>
               <li>Veg Fried Rice</li>
               <li>Hakka Noodles</li>
               <li>Vegetable Manchurian</li>
               <li>Hot and Sour Soup</li>
               <li>Dim Sum</li>
               <li>Kung Pao Tofu</li>
            </ul>
         </div>
      </div>
   </div>
   <div class="con">
      <div class="about_content">
         <img src="images/me.jpg" alt="Mexican Food">
         <div class="food-menu">
            <h3 style=" color: white;"><b>Middle Eastern</b></h3>
            <ul>
               <li>Falafel</li>
               <li>Hummus with Pita</li>
               <li>Tabbouleh</li>
               <li>Baba Ganoush</li>
               <li>Stuffed Grape Leaves</li>
               <li>Vegetable Shawarma</li>
               <li>Lentil Soup</li>
            </ul>
         </div>
      </div>
      <div class="about_content">
         <img src="images/thai.jpg" alt="Mexican Food">
         <div class="food-menu">
            <h3 style=" color: white;"><b>Thai</b></h3>
            <ul>
               <li>Pad Thai</li>
               <li>Green Curry</li>
               <li>Vegetable Stir Fry</li>
               <li>Tom Yum Soup</li>
               <li>Sticky Rice with Mango</li>
               <li>Thai Spring Rolls</li>
               <li>Thai Fried Rice</li>
            </ul>
         </div>
      </div>
      <div class="about_content">
         <img src="images/japan.jpg" alt="Mexican Food">
         <div class="food-menu">
            <h3 style=" color: white;"><b>Japanese</b></h3>
            <ul>
               <li>Vegetable Sushi</li>
               <li>Miso Soup</li>
               <li>Tempura</li>
               <li>Teriyaki Vegetables</li>
               <li>Edamame</li>
               <li>Udon Noodles</li>
               <li>Onigiri</li>
            </ul>
         </div>
      </div>
   </div>
   <div class="con2">
      <div class="about_content">
         <img src="images/mm.jpg" alt="Mexican Food">
         <div class="food-menu">
            <h3 style=" color: white;"><b>Mediterranean</b></h3>
            <ul>
               <li>Greek Salad</li>
               <li>Vegetable Moussaka</li>
               <li>Spanakopita</li>
               <li>Ratatouille</li>
               <li>Stuffed Peppers</li>
               <li>Vegetarian Gyro</li>
               <li>Baklava</li>
            </ul>
         </div>
      </div>
      <div class="about_content">
         <img src="images/french.jpg" alt="Mexican Food">
         <div class="food-menu">
            <h3 style=" color: white;"><b>French</b></h3>
            <ul>
               <li>Ratatouille</li>
               <li>Vegetable Quiche</li>
               <li>Soufflé</li>
               <li>French Onion Soup</li>
               <li>Croissant</li>
               <li>Ratatouille Tart</li>
               <li>Salade Niçoise</li>
            </ul>
         </div>
      </div>
      <div class="about_content">
         <img src="images/de.jpg" alt="Mexican Food">
         <div class="food-menu">
            <h3 style=" color: white;"><b>Desserts</b></h3>
            <ul>
               <li>Gulab Jamun</li>
               <li>Kheer</li>
               <li>Rasgulla</li>
               <li>Brownies</li>
               <li>Ice Cream</li>
               <li>Fruit Salad</li>
               <li>Cheesecake</li>
            </ul>
         </div>
      </div>
   </div>

</body>



<!-- end about -->


      <!--  footer -->
        <!--  footer -->
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