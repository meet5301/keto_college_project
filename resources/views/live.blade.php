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
                        <h2>Live Streaming Services</h2>
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
                            Best Live Streaming Service in Gujrat. </h3>
                        <p>Experience events like never before with Live Streaming Service in Kerala. We bring the even
                            to life as you can enjoy and even take part in it from anywhere in the world real-time.
                            Don’t miss a moment of the action with high-quality, interactive streaming.</p>
                        <p>Attend every event with live streaming service in Kerala, no matter where you are in the
                            world….</p>
                        <p>Live streaming service in Gujrat for events have become increasingly popular in recent years,
                            especially after the COVID-19 pandemic. Today, live streaming services are a must for all
                            types of events, anywhere around the world and Kerala is no different. From weddings, to
                            religious events and social gatherings, attendees want to see their favourite moments live
                            as they sit in the comfort of their homes. Technology has created a world of opportunities
                            and Melodia Event Management brings this exact accessibility to your doorstep.</p>
                        <p>When broadcast online, these real-time streaming events connect everyone with an internet.
                            Those who cannot attend the event can easily log into their computers, click on the link and
                            watch the event live. Catch a glimpse of your favourite events as Melodia Event Management
                            planners hook you up accurately to the internet.</p>



                        <img src="images/live.jpg" alt="Corporate Event Management">
                        <!-- <div class="about_img text-center">
                        
                     </div> -->
                        <p>Live streaming offers great flexibility and customisability, which are two of the key
                            advantages of the technology. Whether you are on Facebook, YouTube or any other social
                            media, you can bank on our services relay the event to your preferred audience. We build a
                            link and then choose a high definition camera to broadcast the event through the internet
                            depending on your requirements and financial constraints. Our event planners design film
                            relays with premium production values suited to your specific needs.</p>
                        <p>Melodia Event Management planners know that live streaming services are extremely economical
                            and adaptable. That is why we suggest the technology to people who want more attendees at a
                            less cost. By offering live streaming, our event organizers make your events more accessible
                            and cost-effective for everyone.</p>
                        <p>Live streaming services can also help increase an event’s reach and impact. By offering live
                            streaming service in Kerala, our event planners attract attendees who may not have been able
                            to appear in person, increasing the event’s overall impact. Reach out to a considerably
                            large audience by streaming online rather than holding only a physical event. This is
                            beneficial particularly for occasions where a large audience presence is required such as
                            international and domestic business conferences, or festivals.</p>
                        <p>One of Gujrat most popular uses of live-streaming services is for weddings. Kerala is
                            renowned for its lavishness, natural beauty and celebratory spirit. The region is also
                            popular for its colourful mascot-type events that are watched by the world. It is right to
                            say that the COVID-19 pandemic reinforced faith in the digital due to which, most people are
                            turning to the live streaming platform to showcase performances, weddings and much more.</p>
                        <p>All types of events in Gujrat nowadays, require live streaming and in fact, is an essential
                            technology where elaborate events and occasions are concerned. The process is versatile,
                            adaptable and highly affordable – which means you can connect to a plethora of people at the
                            fraction of the cost. Whether you are having a wedding, religious ceremony or a conference,
                            it is imperative to employ Melodia Event Management’s live streaming services for your
                            viewers’ benefits.</p>




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