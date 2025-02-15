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
                        <h2>Wedding dance Gujarat
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
                            Captivating Wedding Dance Gujrat: Unforgettable Bridal and Groom Welcome Entry
                        </h3>
                        <p>Wedding dance Gujrat are becoming more and more popular recent days. They have been a part of
                            the culture for a long time before, but recently, people have started hiring professional
                            dance groups for weddings event ceremony, especially in the last 10 to 15 years. Weddings in
                            Kerala are growing every day and people want to make them unique and enjoyable. Everyone
                            wants to have a great time on the wedding day.</p>
                        <p>There are professional wedding dance groups in Kerala, and most of them are based in Kochi
                            city. These wedding dancers try to bring variety to their performances because people
                            nowadays want something different in wedding dances. The most important dance is the welcome
                            dance, which happens when the bride and groom enter the wedding day event. All the guests
                            are excited for this moment of time, and when the anchor announces their arrival, the new
                            married couple comes with a dance team. The guests stand up and clap. The entry dance of the
                            bride and groom always is colorful and amazing.</p>
                        <p>The best wedding dance choreographers in Gujrat also offer great opportunities for couples
                            and families to learn dance. They provide new dance lessons for the entire family, allowing
                            everyone to dance with professional steps.</p>

                        <img src="images/garaba.jpg" alt="Corporate Event Management">
                        <!-- <div class="about_img text-center">
                        
                     </div> -->
                        <p>After the welcome dance, the dancers change costumes and perform on the stage for the guests.
                            Usually, there are around 5 to 6 dances at a normal wedding, no matter if it’s a Hindu,
                            Muslim, or Christian wedding. Different religions have different types of dances in Kerala.
                            In Hindu weddings, traditional Kerala dance forms like Mohiniyattam and Thiruvathira Kali
                            are often used in Kerala. In Christian weddings, there are usually Western-style dances, and
                            Muslim weddings may have Arabic-style dances. But at the wedding reception, there is a mix
                            of Western and Indian cultures without any religious barriers.</p>
                        <p>These dancers help create a lively atmosphere on the wedding day. They add color to the
                            photography and videography. Many couples hire professional dancers mainly for the photos
                            and videos. And end of the event, this dancers group invite the bride and groom to join them
                            on the dance floor. The wedding couple family and friends joins in, and they all have a
                            great time dancing. The program ends with happy memories and lots of joy on the dance floor.

                        </p>
                        <p>In conclusion, wedding dance are becoming more popular. People hire professional dance teams
                            to make their weddings unique and enjoyable. The welcome dance is the most important one,
                            and the dancers also perform on the stage. Different types of dances are performed depending
                            on the religion. The wedding dance Kerala add best music and color to the wedding event
                            function and make it lively. The bride, groom, and their families join in the dancing, and
                            the event ends with happy memories.

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