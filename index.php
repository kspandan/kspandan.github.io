<?php

include "config.php";

if (isset($_REQUEST["submit"])) {
    
    $id = $_REQUEST["id"];
    $name = $_REQUEST["name"];
    $doj = $_REQUEST["doj"];
    $dob = $_REQUEST["dob"];
    $phone = $_REQUEST["phone"];
    $coach = $_REQUEST["coach"];
    

    $ins = "INSERT INTO `members` VALUES ('$id','$name','$doj','$dob','$phone','$coach')";
        $query1 = mysqli_query($connection, $ins);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="images/gym.ico">

    <title>Trendset</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheee" href="css/aos.css">
    <!--main page css-->
    <link rel="stylesheet" href="css/main.css">
</head>
<body dat-spy="scroll" data-target="#navbarNav" data-offset="50">

    <!-- MENU BAR -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">

            <a class="navbar-brand" href="index.php">Trendset Fitness</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-lg-auto">
                    <li class="nav-item">
                        <a href="#home" class="nav-link smoothScroll">Home</a>
                    </li>

                    <li class="nav-item">
                        <a href="login.php" class="nav-link smoothScroll">Admin</a>
                    </li>

                    <li class="nav-item">
                        <a href="#about" class="nav-link smoothScroll">About Us</a>
                    </li>

                    <li class="nav-item">
                        <a href="#class" class="nav-link smoothScroll">Classes</a>
                    </li>

                    <li class="nav-item">
                        <a href="#schedule" class="nav-link smoothScroll">Schedules</a>
                    </li>

                    <li class="nav-item">
                        <a href="#contact" class="nav-link smoothScroll">Contact</a>
                    </li>
                </ul>

                <ul class="social-icon ml-lg-3">
                    <li><a href="#" class="fa fa-facebook"></a></li>
                    <li><a href="https://twitter.com/spandank22" class="fa fa-twitter"></a></li>
                    <li><a href="https://www.instagram.com/spandan_22/" class="fa fa-instagram"></a></li>
                </ul>
            </div>

        </div>
    </nav>


     <!-- HERO -->
     <section class="hero d-flex flex-column justify-content-center align-items-center" id="home">

            <div class="bg-overlay"></div>

               <div class="container">
                    <div class="row">

                         <div class="col-lg-8 col-md-10 mx-auto col-12">
                              <div class="hero-text mt-5 text-center">

                                    <h6 data-aos="fade-up" data-aos-delay="300">Build a Healthy Lifestyle!</h6>

                                    <h1 class="text-white" data-aos="fade-up" data-aos-delay="500">Upgrade your body at Trendset Fitness</h1>

                                    <a href="#feature" class="btn custom-btn mt-3" data-aos="fade-up" data-aos-delay="600">Get started</a>

                                    <a href="#about" class="btn custom-btn bordered mt-3" data-aos="fade-up" data-aos-delay="700">learn more</a>
                                   
                              </div>
                         </div>

                    </div>
               </div>
     </section>


     <section class="feature" id="feature">
        <div class="container">
            <div class="row">

                <div class="d-flex flex-column justify-content-center ml-lg-auto mr-lg-5 col-lg-5 col-md-6 col-12">
                    <h2 class="mb-3 text-white" data-aos="fade-up">New to the Trendset?</h2>

                    <h6 class="mb-4 text-white" data-aos="fade-up">Your membership for 2 months (₹4k per month)</h6>

                    <p data-aos="fade-up" data-aos-delay="200">Trendset will help you to maintain your health and fitness you will find only at <a rel="nofollow" href="#home" target="_parent">Trendset</a> </p>

                    <a href="#" class="btn custom-btn bg-color mt-3" data-aos="fade-up" data-aos-delay="300" data-toggle="modal" data-target="#membershipForm">Become a member today</a>
                </div>

                <div class="mr-lg-auto mt-3 col-lg-4 col-md-6 col-12">
                     <div class="about-working-hours">
                          <div>

                                <h2 class="mb-4 text-white" data-aos="fade-up" data-aos-delay="500">Working hours</h2>

                               <strong class="d-block" data-aos="fade-up" data-aos-delay="600">Sunday : Closed</strong>

                               <strong class="mt-3 d-block" data-aos="fade-up" data-aos-delay="700">Monday - Friday</strong>

                                <p data-aos="fade-up" data-aos-delay="800">7:00 AM - 10:00 PM</p>

                                <strong class="mt-3 d-block" data-aos="fade-up" data-aos-delay="700">Saturday</strong>

                                <p data-aos="fade-up" data-aos-delay="800">6:00 AM - 4:00 PM</p>
                               </div>
                          </div>
                     </div>
                </div>

            </div>
        </div>
    </section>


     <!-- ABOUT -->
     <section class="about section" id="about">
               <div class="container">
                    <div class="row">

                            <div class="mt-lg-5 mb-lg-0 mb-4 col-lg-5 col-md-10 mx-auto col-12">
                                <h2 class="mb-4" data-aos="fade-up" data-aos-delay="300">Hello, we are Trendset</h2>

                                <p data-aos="fade-up" data-aos-delay="400">WE can assure you that ,if you join us you will surely maintain your Health and Fitness.</p>

                                <p data-aos="fade-up" data-aos-delay="500">If you have any question regarding <a rel="nofollow" href="#" target="_parent">Trendset Membership</a>, you can <a rel="nofollow" href="mailto:spandank22@gmail.com" target="_parent">contact us</a> immediately. Thank you.</p>

                            </div>

                            <div class="ml-lg-auto col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="700">
                                <div class="team-thumb">
                                    <img src="images/team/undraw_yoga_248n.svg" class="img-fluid" alt="Trainer">

                                    <div class="team-info d-flex flex-column">

                                        <h3>Sasmita </h3>
                                        <span>Yoga Instructor</span>

                                        <ul class="social-icon mt-3">
                                            <li><a href="#" class="fa fa-twitter"></a></li>
                                            <li><a href="#" class="fa fa-instagram"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="mr-lg-auto mt-5 mt-lg-0 mt-md-0 col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="800">
                                <div class="team-thumb">
                                    <img src="images/team/undraw_indoor.svg" class="img-fluid" alt="Trainer">

                                    <div class="team-info d-flex flex-column">

                                        <h3>Rahul </h3>
                                        <span>Body trainer</span>

                                        <ul class="social-icon mt-3">
                                            <li><a href="#" class="fa fa-instagram"></a></li>
                                            <li><a href="#" class="fa fa-facebook"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                    </div>
               </div>
     </section>


     <!-- CLASS -->
     <section class="class section" id="class">
               <div class="container">
                    <div class="row">

                            <div class="col-lg-12 col-12 text-center mb-5">
                                <h6 data-aos="fade-up">Get A Perfect Body</h6>

                                <h2 data-aos="fade-up" data-aos-delay="200">Our Training Classes</h2>
                             </div>

                            <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                                <div class="class-thumb">
                                    <img src="images/class/yoga-class.jpg" class="img-fluid" alt="Class">

                                    <div class="class-info">
                                        <h3 class="mb-1">Yoga</h3>

                                        <span><strong>Trained by</strong> - Yoga Expert</span>

                                        <span class="class-price">₹1.5k</span>

                                        <p class="mt-3">Yoga is a light, which once lit will never dim</p>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-5 mt-lg-0 mt-md-0 col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="500">
                                <div class="class-thumb">
                                    <img src="images/class/crossfit-class.jpg" class="img-fluid" alt="Class">

                                    <div class="class-info">
                                        <h3 class="mb-1">Aerobics</h3>

                                        <span><strong>Trained by</strong> - Aerobics Trainer</span>

                                        <span class="class-price">₹2k</span>

                                        <p class="mt-3">True power of energy comes from Aerobics</p>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-5 mt-lg-0 col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="600">
                                <div class="class-thumb">
                                    <img src="images/class/cardio-class.jpg" class="img-fluid" alt="Class">

                                    <div class="class-info">
                                        <h3 class="mb-1">Cardio</h3>

                                        <span><strong>Trained by</strong> - Cardio Experts</span>

                                        <span class="class-price">₹2k</span>

                                        <p class="mt-3">Good things come to those who sweat....</p>
                                    </div>
                                </div>
                            </div>

                    </div>
               </div>
     </section>


     <!-- SCHEDULE -->
     <section class="schedule section" id="schedule">
               <div class="container">
                    <div class="row">

                            <div class="col-lg-12 col-12 text-center">
                                <h6 data-aos="fade-up">Our weekly GYM schedules</h6>

                                <h2 class="text-white" data-aos="fade-up" data-aos-delay="200">Workout Timetable</h2>
                             </div>

                             <div class="col-lg-12 py-5 col-md-12 col-12">
                                 <table class="table table-bordered table-responsive schedule-table" data-aos="fade-up" data-aos-delay="300">

                                     <thead class="thead-light">
                                         <th><i class="fa fa-calendar"></i></th>
                                         <th>Mon</th>
                                         <th>Tue</th>
                                         <th>Wed</th>
                                         <th>Thu</th>
                                         <th>Fri</th>
                                         <th>Sat</th>
                                     </thead>

                                     <tbody>
                                         <tr>
                                            <td><small>7:00 am</small></td>
                                            <td>
                                                <strong>Cardio</strong>
                                                <span>7:00 am - 9:00 am</span>
                                            </td>
                                            <td>
                                                <strong>Power Fitness</strong>
                                                <span>7:00 am - 9:00 am</span>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <strong>Yoga Section</strong>
                                                <span>7:00 am - 9:00 am</span>
                                            </td>
                                         </tr>

                                         <tr>
                                            <td><small>9:00 am</small></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <strong>Boxing</strong>
                                                <span>8:00 am - 9:00 am</span>
                                            </td>
                                            <td>
                                                <strong>Areobic</strong>
                                                <span>8:00 am - 9:00 am</span>
                                            </td>
                                            <td></td>
                                            <td>
                                                <strong>Cardio</strong>
                                                <span>8:00 am - 9:00 am</span>
                                            </td>
                                         </tr>

                                         <tr>
                                            <td><small>11:00 am</small></td>
                                            <td></td>
                                            <td>
                                                <strong>Boxing</strong>
                                                <span>11:00 am - 2:00 pm</span>
                                            </td>
                                            <td>
                                                <strong>Areobic</strong>
                                                <span>11:30 am - 3:30 pm</span>
                                            </td>
                                            <td></td>
                                            <td>
                                                <strong>Body work</strong>
                                                <span>11:50 am - 5:20 pm</span>
                                            </td>
                                         </tr>

                                         <tr>
                                            <td><small>2:00 pm</small></td>
                                            <td>
                                                <strong>Boxing</strong>
                                                <span>2:00 pm - 4:00 pm</span>
                                            </td>
                                            <td>
                                                <strong>Power lifting</strong>
                                                <span>3:00 pm - 6:00 pm</span>
                                            </td>
                                            <td></td>
                                            <td>
                                                <strong>Cardio</strong>
                                                <span>6:00 pm - 9:00 pm</span>
                                            </td>
                                            <td></td>
                                            <td>
                                                <strong>Crossfit</strong>
                                                <span>5:00 pm - 7:00 pm</span>
                                            </td>
                                         </tr>
                                     </tbody>
                                 </table>
                             </div>

                    </div>
               </div>
     </section>


     <!-- CONTACT -->
     <section class="contact section" id="contact">
          <div class="container">
               <div class="row">

                    <div class="ml-auto col-lg-5 col-md-6 col-12">
                        <h2 class="mb-4 pb-2" data-aos="fade-up" data-aos-delay="200">Feel free to ask anything</h2>

                        <form action="#" method="post" class="contact-form webform" data-aos="fade-up" data-aos-delay="400" role="form">
                            <input type="text" class="form-control" name="cf-name" placeholder="Name">

                            <input type="email" class="form-control" name="cf-email" placeholder="Email">

                            <textarea class="form-control" rows="5" name="cf-message" placeholder="Message"></textarea>

                            <button type="submit" class="form-control" id="submit-button" name="submit">Send Message</button>
                        </form>
                    </div>

                    <div class="mx-auto mt-4 mt-lg-0 mt-md-0 col-lg-5 col-md-6 col-12">
                        <h2 class="mb-4" data-aos="fade-up" data-aos-delay="600">Where you can <span>find us</span></h2>

                        <p data-aos="fade-up" data-aos-delay="800"><i class="fa fa-map-marker mr-1"></i> Katpadi ,Vellore, Tamil Nadu , India</p>
<!-- How to change your own map point
	1. Go to Google Maps
	2. Click on your location point
	3. Click "Share" and choose "Embed map" tab
	4. Copy only URL and paste it within the src="" field below
-->
                        <div class="google-map" data-aos="fade-up" data-aos-delay="900">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15552.117858544316!2d79.1543802!3d12.9699664!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf7e7a06e24671826!2sVIT%20Trendset%20AC%20Gym!5e0!3m2!1sen!2sin!4v1668171072583!5m2!1sen!2sin" width="1920" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    
               </div>
          </div>
     </section>


     <!-- FOOTER -->
     <footer class="site-footer">
          <div class="container">
               <div class="row">


                    <div class="d-flex justify-content-center mx-auto col-lg-5 col-md-7 col-12">
                        <p class="mr-4">
                            <i class="fa fa-envelope-o mr-1"></i>
                            <a href="mailto:spandank22@gmail.com">Contact Us</a>
                        </p>

                        <!-- <p><i class="fa fa-phone mr-1"></i> 010-020-0840</p> -->
                    </div>
                    
               </div>
          </div>
     </footer>

    <!-- Modal -->
    <div class="modal fade" id="membershipForm" tabindex="-1" role="dialog" aria-labelledby="membershipFormLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
  
          <div class="modal-content">
            <div class="modal-header">
  
              <h2 class="modal-title" id="membershipFormLabel">Membership Form</h2>
  
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
  
            <div class="modal-body">
              <form class="membership-form webform" role="form">
                  <input type="text" class="form-control" name="ID" placeholder="ID" required>

                  <input type="text" class="form-control" name="name" placeholder="Name" required>
  
                  <input type="date" class="form-control" name="doj" placeholder="DOJ" required>

                  <input type="date" class="form-control" name="dob" placeholder="DOB" required>
  
                  <input type="tel" class="form-control" name="phone" placeholder="tel-no" required>
  
                  <input type="text" class="form-control" name="coach" placeholder="Coach" required>
  
                  <button type="submit" class="form-control" id="submit-button" name="submit">Submit</button>
  
                  <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="signup-agree">
                      <label class="custom-control-label text-small text-muted" for="signup-agree">I agree to the <a href="#">Terms &amp;Conditions</a>
                      </label>
                  </div>
              </form>
            </div>
  
            <div class="modal-footer"></div>
  
          </div>
        </div>
      </div>






 <!--scripts part--> 
<script src="js/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/custom.js"></script>
    
</body>
</html>