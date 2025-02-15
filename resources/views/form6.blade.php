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
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
      <style>
         /* Paragraph styling */
         p {
            /* text-align: justify; */
            font-size: 18px;
            margin: 15px 0; /* Spacing between paragraphs */
            line-height: 1.7; /* Improved readability */
            font-family: "jost", sans-serif; /* Consistent font */
            /* color: #333; Neutral color */
         }
         h3{
            font-family: "jost", sans-serif;
            font-size: 22px; 
         }

         /* Uniform image styling */
         .about_content img {
            /* width: 130%; Responsive image size */
            width: 2000px; /* Maximum width */
            height: 130%; /* Maintain aspect ratio */
            border-radius: 10px; /* Rounded corners */
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); /* Soft shadow */
             margin: auto auto; /*Centered with spacing */
            display: block; /* Ensures block alignment */
         }
         .hello{
            margin: 25px;
         } body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f8f9fa;
    }

    .form-container {
      margin: 50px auto;
      padding: 20px;
      max-width: 800px;
      background: #fff;
      border-radius: 8px;
      box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    }

    h1 {
      font-size: 28px;
      text-align: center;
      margin-bottom: 20px;
    }

    .form-section {
      display: none;
      margin-top: 20px;
      padding: 15px;
      border: 1px solid #ccc;
      border-radius: 8px;
    }

    .form-section.active {
      display: block;
    }

    label {
      display: block;
      margin-bottom: 8px;
    }

    input[type="text"],
    input[type="date"],
    input[type="number"],
    textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    button {
      display: block;
      margin: 20px auto;
      padding: 10px 20px;
      background-color: #28a745;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    button:hover {
      background-color: #218838;
    }

    #finalSubmit {
      background-color: #007bff;
    }

    #finalSubmit:hover {
      background-color: #0056b3;
    }

    .error {
      color: red;
      font-size: 14px;
      text-align: center;
    }

      </style>
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
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
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
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
                                 if(session()->has('username'))
                                 {
                              ?>
                                 <li class="nav-item">
                                    <a class="nav-link" href="logout">Logout</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link">{{session('username')}}</a>
                                 </li>
                              <?php
                                 }
                                 else
                                 {
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
                     <h2>form</h2>
                  </div> -->
               </div>
            </div>
         </div>
      </div>
      <!-- about -->
      
      <body>
  <div class="form-container">
    <h1>Service Selection Form</h1>
    <form id="mainForm">
      <label><input type="checkbox" name="service" value="houseBoat"> garba night</label>
      <label><input type="checkbox" name="service" value="carDecoration"> Live Music</label>
      <label><input type="checkbox" name="service" value="liveStreaming"> Dj Consert</label>
      <label><input type="checkbox" name="service" value="weddingDance"> Music Artists / Singer</label>
      <label><input type="checkbox" name="service" value="stageDecoration"> Cultura Dance</label>
      <button type="button" onclick="showSelectedForms()">Submit</button>
    </form>

    <div id="houseBoatForm" class="form-section">
      <h2>garba night</h2>
      <label for="houseBoatType">Decoration Type:</label>
      <input type="text" id="houseBoatType" placeholder="House or Boat">
      <label for="dateHouseBoat">Event Date:</label>
      <input type="date" id="dateHouseBoat">
    </div>

    <div id="carDecorationForm" class="form-section">
      <h2>Live Music</h2>
      <label for="carType">Car Type:</label>
      <input type="text" id="carType" placeholder="Enter car model">
      <label for="dateCar">Event Date:</label>
      <input type="date" id="dateCar">
    </div>

    <div id="liveStreamingForm" class="form-section">
      <h2>Dj Consert</h2>
      <label for="platform">Streaming Platform:</label>
      <input type="text" id="platform" placeholder="YouTube, Zoom, etc.">
      <label for="streamingDate">Event Date:</label>
      <input type="date" id="streamingDate">
    </div>

    <div id="weddingDanceForm" class="form-section">
      <h2>Music Artists / Singer</h2>
      <label for="numberOfDancers">Number of Dancers:</label>
      <input type="number" id="numberOfDancers" placeholder="Enter number of dancers">
      <label for="eventDate">Event Date:</label>
      <input type="date" id="eventDate">
    </div>

    <div id="stageDecorationForm" class="form-section">
      <h2>Cultura Dance</h2>
      <label for="theme">Theme:</label>
      <textarea id="theme" rows="3" placeholder="Enter decoration theme"></textarea>
      <label for="dateStage">Event Date:</label>
      <input type="date" id="dateStage">
    </div>

    <p id="errorMessage" class="error" style="display:none;">Please fill out all required fields before submitting.</p>
    <button id="finalSubmit" style="display:none;" onclick="submitForm(event)">Final Submit</button>
  </div>

  <script>
    function showSelectedForms() {
      const checkboxes = document.querySelectorAll('input[name="service"]:checked');
      const allSections = document.querySelectorAll('.form-section');
      const finalSubmit = document.getElementById('finalSubmit');
      const errorMessage = document.getElementById('errorMessage');

      // Hide all sections initially
      allSections.forEach(section => section.classList.remove('active'));
      finalSubmit.style.display = 'none';
      errorMessage.style.display = 'none';

      // Show selected sections
      if (checkboxes.length > 0) {
        checkboxes.forEach(checkbox => {
          const formId = checkbox.value + 'Form';
          const formSection = document.getElementById(formId);
          if (formSection) {
            formSection.classList.add('active');
          }
        });
        finalSubmit.style.display = 'block';
      }
    }

    function submitForm(event) {
      event.preventDefault();
      const selectedForms = document.querySelectorAll('.form-section.active');
      const errorMessage = document.getElementById('errorMessage');
      let allFieldsFilled = true;

      // Validate all visible inputs
      selectedForms.forEach(section => {
        const inputs = section.querySelectorAll('input, textarea');
        inputs.forEach(input => {
          if (!input.value.trim()) {
            allFieldsFilled = false;
          }
        });
      });

      if (!allFieldsFilled) {
        errorMessage.style.display = 'block';
      } else {
        errorMessage.style.display = 'none';

        const formData = {};
        selectedForms.forEach(section => {
          const inputs = section.querySelectorAll('input, textarea');
          inputs.forEach(input => {
            formData[input.id] = input.value;
          });
        });

        console.log('Submitted Data:', formData);
        alert('Form submitted successfully!');
      }
    }
    
  </script>
</body>


      
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