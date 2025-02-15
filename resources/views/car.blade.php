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
            text-align: justify;
            font-size: 18px;
            margin: 15px 0;
            /* Spacing between paragraphs */
            line-height: 1.7;
            /* Improved readability */
            font-family: "jost", sans-serif;
            /* Consistent font */
            color: #333;
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
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarsExample04">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item ">
                                        <a class="nav-link" href="home">Home</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="wed">Wedding Planner</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="gallery">Gallery</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="contact">Contact Us</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link" href="about">Foods</a>
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
    <div class="back_re">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- <div class="title">
                        <h2>wedding cars</h2>
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
                            Unforgettable luxury wedding cars in Gujrat for your special day. </h3>
                        <p>Wedding car rental service is a fantastic business in Kerala. Melodia Event Management
                            company offers the best wedding cars from various cities in Kerala for your big day.</p>
                        <p>The wedding ceremony is a very important event for every person’s life.They want to make
                            their wedding day extra something special and memorable one. Nowadays, couples desire to
                            plan every aspect of their wedding, including decorations, makeup, wedding dance,
                            entertainment, and DJs. Among these categories, wedding cars are an exceptional addition to
                            each couple’s life.</p>
                        <p>The rental price for wedding cars in Kerala starts at 10,000 Indian rupees. With this price,
                            you can rent a wedding car for 80 kilometers and 8 hours on your wedding day. If you require
                            more kilometers, an additional 50 rupees will be charged per kilometer. Similarly, if you
                            need more hours, an extra 500 rupees will be added per hour. These are the standard prices
                            for Kerala wedding cars.</p>
                        <p>You can choose from various luxury vehicles like Audi, BMW, and Mercedes-Benz in this price
                            range. Another category that many couples love is vintage cars. These vintage cars are
                            available at similar prices. Kerala has a wide variety of old vintage cars to choose from.
                        </p>



                        <img src="images/car4.jpg" alt="Corporate Event Management">
                        <!-- <div class="about_img text-center">
                        
                     </div> -->
                        <p>Apart from that, premium wedding luxury cars like Rolls-Royce and Jaguar are also available
                            in Kerala. While these cars might be more expensive, they are worth considering for their
                            elegance and style. All cars come with experienced drivers and are available in all cities
                            across Kerala. Our event management planners are ready to assist you with your needs in
                            almost every city in Kerala. If you want a luxury wedding car for your event day, please
                            contact us as soon as possible.</p>
                        <p>In simpler terms:</p>
                        <p>Renting wedding cars is a popular and important business in Kerala. Melodia Event Management
                            company offers the best wedding cars from different cities in Kerala for your special day.
                            Wedding cars make the wedding day more memorable and couples want to plan every aspect of
                            their wedding, including decorations, makeup, dance, and entertainment. You can rent a
                            wedding car starting from 10,000 Indian rupees, which includes 80 kilometers and 8 hours. If
                            you need more kilometers or hours, there are additional charges. You can choose from luxury
                            vehicles like Audi, BMW, and Mercedes-Benz.</p>
                        <p>Vintage cars are also available at similar prices. Other premium luxury cars like Rolls-Royce
                            and Jaguar are more expensive but add elegance to the wedding day. All cars come with
                            experienced drivers and are available in all cities in Kerala. Contact us if you want a
                            luxury wedding car for your special day.</p>




                        <a class="read_more" href="formf5" style="margin-bottom:15px;"> Booking </a>
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
                        <ul class="link_menu">
                            <li><a href="home">Home</a></li>
                            <li><a href="about"> about</a></li>
                            <li><a href="room">Our Events</a></li>
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