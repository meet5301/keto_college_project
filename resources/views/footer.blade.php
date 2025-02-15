<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Footer Design</title>
   <style>
        .social-icons {
            display: flex;
            gap: 10px;
            align-items: center;
        }
        .social-icons a img {
            width: 32px;
            height: 32px;
            transition: transform 0.3s ease;
        }
        .social-icons a img:hover {
            transform: scale(1.2);
        }
    </style>
</head>

<body style="margin: 0; font-family: Arial, sans-serif; background-color: black; color: white;">

   <!-- Footer Section -->
   <footer
      style="position: relative; background: url('images/626.jpg') no-repeat center center/cover; color: white; padding: 60px 80px;">
      <!-- Black Blur Overlay -->
      <div
         style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(62, 57, 57, 0.7); filter: blur(5px); z-index: 1;">
      </div>

      <!-- Content Wrapper -->
      <div style="position: relative; z-index: 2;">
         <!-- Top Section: Logo and Description -->
         <!-- <div class="social-icons">
         <img src="images/logo.png" href="food" style="color:#E1306C;"><i class="fab fa-instagram" ></i>
        <img href="#" style="color:#E1306C;"><i class="fab fa-instagram"></i></img>
        <a href="#" style="color:#FF0000;"><i class="fab fa-youtube"></i></a>
        <a href="#" style="color:#4267B2;"><i class="fab fa-facebook"></i></a>
        <a href="#" style="color:#0077B5;"><i class="fab fa-linkedin"></i></a>
        <a href="#" style="color:#1DA1F2;"><i class="fab fa-twitter"></i></a>
    </div> -->

         <div style="justify-content: space-between; gap: 40px; margin-bottom: 40px; margin-left: 200px; ">
            <div style=" max-width: 1000px;">
               <!-- <img src="images/logo.png" alt="Melodia Logo" style="max-height: 80px; margin-bottom: 20px;"> -->
               <p style="font-size: 16px; line-height: 1.8; ">
                  Planning a full event has never been easier! Melodia® Event Management, an ISO 9001:2015 Certified
                  Event Management Company based in Gujrat state, India, offers a wide range of services to make your
                  events stress-free and memorable across Gujrat. From premium corporate events and destination wedding
                  planning to small-scale birthday parties and private gatherings, you can be sure we have it all
                  covered.With offices in Surat,Ahmedabad and Rajkot we also specialize in venue selections and
                  hospitality services. We primarily serve Keralites, Malayalees, and those looking to plan destination
                  events in Gujrat. Whether you are planning a destination wedding event or a local celebration in
                  Gujrat, India, Melodia® is here to help.
               </p>
            </div>
            
         </div>

         <!-- Middle Section: Links -->
         <div style="display: flex; justify-content: space-between; gap: 40px; margin-bottom: 40px;padding-left: 100px;">
            <div>
               <h3 style="font-size: 18px; font-weight: bold; margin-bottom: 15px; color: white;  ">QUICK LINKS</h3>
               <ul style="list-style: none; padding: 0; margin: 0; ">
                  <li><a href="home" style="text-decoration: none; color: white; font-size: 14px;">Home</a></li>
                  <li><a href="event" style="text-decoration: none; color: white; font-size: 14px;">Our Events</a></li>
                  <li><a href="gallery" style="text-decoration: none; color: white; font-size: 14px;">Gallery</a></li>
                  <li><a href="food" style="text-decoration: none; color: white; font-size: 14px;">Foods</a></li>
                  <li><a href="contact" style="text-decoration: none; color: white; font-size: 14px;">Contact</a></li>
                  <li><a href="login" style="text-decoration: none; color: white; font-size: 14px;">Login</a></li>
               </ul>
            </div>
            <div>
               <h3 style="font-size: 18px; font-weight: bold; margin-bottom: 15px; color: white;   ">SERVICES</h3>
               <ul style="list-style: none; padding: 0; margin: 0;">
                  <li><a href="coro" style="text-decoration: none; color: white; font-size: 14px;">Corporate Events</a>
                  </li>
                  <li><a href="wed" style="text-decoration: none; color: white; font-size: 14px;">Wedding Planner</a></li>
                  <li><a href="mue" style="text-decoration: none; color: white; font-size: 14px;">Music &
                        Entertainment</a></li>
                  <li><a href="pp" style="text-decoration: none; color: white; font-size: 14px;">Private Parties</a></li>
                  <li><a href="dw" style="text-decoration: none; color: white; font-size: 14px;">Destination Wedding</a>
                  </li>
                  <li><a href="bw" style="text-decoration: none; color: white; font-size: 14px;">Beach Wedding</a>
                  </li>
               </ul>
            </div>
            <div>
               <h3 style="font-size: 18px; font-weight: bold; margin-bottom: 15px; color: white;">OTHER LINKS</h3>
               <ul style="list-style: none; padding: 0; margin: 0;">
                  <li><a href="#" style="text-decoration: none; color: white; font-size: 14px;">Blog</a></li>
                  <li><a href="#" style="text-decoration: none; color: white; font-size: 14px;">Testimonials</a></li>
                  <li><a href="#" style="text-decoration: none; color: white; font-size: 14px;">Privacy Policy</a></li>
                  <li><a href="#" style="text-decoration: none; color: white; font-size: 14px;">Cancellation and Refund
                        Policy</a></li>
                  <li><a href="#" style="text-decoration: none; color: white; font-size: 14px;">Terms of Service</a>
                  </li>
               </ul>
            </div>
            <div style="margin-bottom: 30px; font-size: 16px; text-align: left;">
            <h3 style="font-size: 18px; font-weight: bold; margin-bottom: 15px; color: white;">CONTACT INFO</h3>
            <p>Melodia Event Management, T.V Center, Kakkanad, Ahmedabad, Gujrat 682037</p>
            <p>Melodia Event Management, Flamon Complex, Main Rd, Kuriachira,<br> Ahmedabad,Gujrat 680006</p>
            <p>Melodia Event Management, Door No: VP 22/152ABC, Vazhakkad Panchayat, <br>Oorkadavu, Po, Oorkadavu, Athod,
              Ahmedabad,Gujrat 673640</p>
            <p>Phone: +91-859-001-0011</p>
            <p>Email: melodiaeventmanagement@gmail.com</p>
         </div>
         </div>

         <!-- Bottom Section: Contact Info -->
         

         <!-- Footer Bottom -->
         <div style="text-align: center; font-size: 14px;">
            <p>© 2008–2025 Melodia Event Management. All Rights Reserved</p>
            <p>Designed by Pindiyan Software & Digital Solutions</p>
         </div>
      </div>
   </footer>

</body>

</html>