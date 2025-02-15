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
                                        <a class="nav-link" href="mue">Music & Entertainment</a>
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
                        <h2>Culture Dance</h2>
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
                            Mystical and mesmerizing night of music and Sufi dance Gujrat
                        </h3>
                        <p>Sufi dance, also known as “whirling dervish” or “semazen,” is a type of spiritual dance that
                            originated in the Islamic Sufi tradition. It is typically performed by individuals or groups
                            of dancers who spin in a circular motion while wearing long, flowing white robes.

                        </p>
                        <p>Sufi dance performances are a beautiful and mesmerizing addition to events such as cultural
                            festivals, weddings, or spiritual gatherings. The dance is often accompanied by live music
                            such as the ney (a type of flute) or the daf (a type of drum), adding to the meditative and
                            trance-like atmosphere.

                        </p>
                        <p>If you’re considering having a Sufi dance performance at your event, it’s important to find
                            experienced and skilled dancers who can authentically represent the tradition. You may also
                            want to consider incorporating elements such as poetry readings, storytelling, or other
                            cultural practices to further enhance the experience for your guests. Melodia Event
                            Management, Kerala, helps you achieve everything.

                        </p>

                        <img src="images/south2.jpg" alt="Corporate Event Management">
                        <div class="about_img text-center">
                            <!-- <img src="images/52.jpg" alt="Corporate Event Management" > -->

                        </div>
                        <p>Based on the teachings of Sufism, a mystical branch of Islam that emphasizes spiritual growth
                            and connection with the divine, the dance is a form of meditation and prayer that represents
                            a symbolic journey towards spiritual enlightenment and union with God.

                        </p>
                        <p>We bring dervishes who have undergone rigorous spiritual training and practice. Our Sufi
                            dance Kerala performers present a beautiful and mesmerizing dance that can be a great
                            addition to any event such as wedding events and corporate events.

                        </p>
                        <p>While organizing successful Sufi dance performances for your Wedding event and other type of
                            events, we do the following:

                        </p>
                        <p>Find an experienced Sufi dance group or a performer: We look for local Sufi dance groups or
                            performers in the local area who will make a big difference to the wedding event.

                        </p>
                        <p>Discuss the details of the performance: Once we have found a Sufi dance group or performer,
                            we discuss the details of the performance with them. We make sure to discuss the duration of
                            the performance, the music, and any special requirements they may have.

                        </p>
                        <p>Choosing a suitable venue: Sufi dance in Kerala is usually performed in a circular space, so
                            we choose a venue that can accommodate this. Choosing a venue with good acoustics and
                            lighting is also important.

                        </p>
                        <p>Prepare the audience: Sufi dance is a spiritual and meditative dance form, so preparing the
                            audience for the performance is important. We provide some information about the history and
                            significance of Sufi dance or even organize a short lecture or discussion before the
                            performance.

                        </p>
                        <p>Ensure safety: Sufi dance involves a lot of spinning and movement, so it is important to
                            ensure the safety of the performers and the audience. We make sure that the venue is safe
                            and that there is enough space for the performers to move around without any obstructions.

                        </p>
                        <p>It is a beautiful and profound expression representing the spiritual connection between
                            humans and the divine. It can be a powerful addition to any event that seeks to explore and
                            celebrate the diversity of human culture and spirituality.

                        </p>





                        <div class="hello">


                            <div>
                                <a class="read_more" href="blog" style="margin-bottom:15px;"> Booking </a>
                            </div>
                            <div class="row">
                            </div>
                            <!-- group  -->



                            <!-- group end -->
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
                            <li><a href="room">Our Room</a></li>
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