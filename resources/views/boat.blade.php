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
                        <h2>Houseboat Wedding Gujrat</h2>
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
                            Romantic Houseboat Wedding Gujrat: Unforgettable Backwater Celebrations with attractive
                            costs </h3>
                        <p>A wedding is a momentous occasion in everyone’s life. Have you ever imagined having your
                            wedding ceremony on a houseboat in Kerala? The idea of a houseboat wedding is truly
                            captivating, creating a delightful ambiance surrounded by the backwaters, coconut trees, and
                            breathtaking natural beauty. In Kerala, the most popular locations for houseboat weddings
                            are Kochi, Kumarakom, and Alleppey. Melodia’s Wedding Planners specializes in organizing
                            exquisite wedding ceremonies on these special houseboats. With their extensive experience,
                            these boats host numerous houseboat weddings every day in Gujrat</p>
                        <p>Houseboat wedding Kerala cater to various types of celebrations. They range from intimate
                            weddings with stunning houseboat decorations to grand affairs with a large number of guests.
                            Additionally, wedding resorts located along the coastal side of backwater lakes are also
                            ideal for hosting other wedding-related events. Destination weddings in Gujrat are
                            particularly popular among couples and their guests who travel from different parts of
                            India, including North India, as well as foreign countries.</p>
                        <p>Melodia Event Management has a deep understanding of the rituals and cultural aspects of
                            Indian weddings, especially North Indian ceremonies. They specialize in organizing multi-day
                            destination wedding celebrations that typically span three to five days. These celebrations
                            include traditional ceremonies such as mehndi, haldi, wedding day rituals, and sangeet.</p>



                        <img src="images/boat.jpg" alt="Corporate Event Management">
                        <!-- <div class="about_img text-center">
                        
                     </div> -->
                        <p>For foreigner weddings, we offer a wide range of traditional Kerala entertainment, including
                            traditional dance forms like Garaba,Dance and more. These captivating performances add a
                            touch of cultural charm to the wedding celebrations. Alongside the traditional dances, we
                            also provide modern wedding dance options, ensuring a perfect blend of traditional and
                            contemporary entertainment. The diverse range of performances guarantees a memorable and
                            enjoyable experience for all guests.</p>
                        <p>To create the perfect ambiance, Melodia often chooses resorts surrounded by lush green
                            coconut groves for certain functions, while opting for houseboat venues for others. If
                            desired, houseboat weddings are also available in other locations across Kerala, such as
                            Kollam, Thrissur, and Calicut districts. The cost of a houseboat wedding Kerala varies
                            depending on the season.</p>
                        <p>Only the houseboat Prices can range from INR 7,000 to INR 25,000, influenced by tourist and
                            wedding seasons. Regardless of the cost, a houseboat wedding Kerala always offers stunning
                            photo opportunities, especially capturing the bride and groom amidst coconut trees, natural
                            greenery, and picturesque backwaters. Some couples even choose to have their wedding here
                            solely for the incredible photo memories it creates.</p>
                        <p>Most houseboat destination weddings include transportation for guests, catering services,
                            photography and videography, wedding stage decorations, mehndi and sangeet decorations,
                            houseboat decorations, entertainment like DJs, live bands, and wedding dance teams, as well
                            as the cost of renting the houseboat. All these essential elements of a wedding are included
                            in the package. The cost for the entire wedding as a destination wedding in Kerala with
                            houseboats can range from 800,000 to 1,000,000 Indian rupees. However, in the case of an
                            intimate wedding, the cost of a houseboat wedding in Kerala will definitely decrease</p>
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