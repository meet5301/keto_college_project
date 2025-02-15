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
                                 <a class="nav-link" href="about">foods</a>
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
                        <h2>Stage decoration
                        </h2> -->
                    </div>
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
                            Best Wedding Stage Decoration Ahmedabad, Ernakulam: Elevate Your Special Day with Stunning
                            Designs</h3>

                        <p>Stage decoration holds significant importance nowadays among people, particularly in
                            weddings. However, other private events and corporate functions also emphasize stage
                            decoration. Melodia Event Management Company has extensive experience in this field, serving
                            Kochi city for almost 15 years.</p>
                        <p>Melodia events has our own stage decoration and production house, enabling us to create
                            stages in ou facility located in the city. Our primary focus is on various religious wedding
                            stage decoration Kochi, particularly Hindu traditional wedding stages, Christian wedding
                            stages, and Muslim wedding stage decoration. The starting price for our wedding stages is
                            35,000 Indian rupees. If you wish to see our collection, you can message us, and we will
                            send our designs through WhatsApp or the company’s Gmail account.

                        </p>
                        <p>Even if you are located outside of India or Kerala, we offer online meeting options such as
                            Zoom or Google Meet. This online platform is particularly suitable for NRIs (Non-Resident
                            Indians) who prefer to plan their weddings and discuss stage decoration ideas from their
                            home country. The company staff is available online full-time to assist clients with any
                            doubts or clarifications. For clients residing in Kochi itself, the company executives will
                            directly visit their houses, showcase the wedding stage decoration designs, and conduct
                            meetings. After two or more meetings, clients can make well-informed decisions regarding a
                            wedding stage decoration Kochi city. In some cases, decisions can be made during the first
                            meeting itself.

                        </p>







                        <img src="images/stage2.jpg" alt="Corporate Event Management">
                        <!-- <div class="about_img text-center">
                        
                     </div> -->
                        <p>Wedding venues in Kochi are usually available for decorating work, mostly on the day before
                            the wedding. The decorations are completed either the previous night or on the wedding day
                            before sunrise. Once the work is finished, both Melodia Events and the venue eagerly await
                            the arrival of the bride and groom for the ceremony. When discussing stage decoration, it is
                            essential to consider other decorations as well, including entrance decorations, pathway
                            decoration, bridal stage decoration for Muslim Nikah ceremony, and specific decorations for
                            weddings such as sangeet decoration and haldi decoration.

                        </p>
                        <p>In terms of flowers, most wedding flowers come from Karnataka, specifically Bangalore or
                            Mysore. Sometimes these flowers can be costly, so artificial flowers are used or
                            incorporated into the stages in Kochi. Many clients nowadays prefer artificial flowers due
                            to their affordability and good quality, which closely resembles fresh flowers. People now
                            have two options for decorations: fresh flowers or artificial flowers. Kerala is also a
                            popular destination wedding place, offering a variety of cultural and traditional ideas for
                            stage decorations.

                        </p>
                        <p>Melodia Events specializes in creating cultural and ritual stages for destination weddings.
                            Additionally, we provide stage decorations for various private events, including baptism
                            stages, holy communion stage decorations, birthday stages, and even corporate event
                            management stages. The prices for smaller private event stages start from 15,000 rupees
                            onwards in Ernakulam District.

                        </p>
                        <p>As mentioned earlier, Melodia Events is dedicated to providing exceptional decorations for
                            wedding stages and offers reasonable prices to clients due to our in-house decoration
                            production house. If you are interested in our discounted prices and high-quality work for
                            your wedding or other events, please feel free to contact us today and message us for more
                            decoration photos and videos.

                        </p>






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