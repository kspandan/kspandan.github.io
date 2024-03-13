<?php
session_start();
if(!$_SESSION['gym']){
    header ( 'location: login.php');  
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="images/gym.ico">

    <title>Admin</title>

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
                        <a href="members.php" class="nav-link smoothScroll">Members</a>
                    </li>

                    <li class="nav-item">
                        <a href="coach.php" class="nav-link smoothScroll">Coaches</a>
                    </li>

                    <li class="nav-item">
                        <a href="billing.php" class="nav-link smoothScroll">Payment</a>
                    </li>

                    <li class="nav-item">
                        <a href="receptionist.php" class="nav-link smoothScroll">Receptionist</a>
                    </li>

                    <li class="nav-item">
                        <a href="logout.php" class="nav-link smoothScroll">Logout</a>
                    </li>
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
                                   
                              </div>
                         </div>

                    </div>
               </div>
     </section>
 <!--scripts part--> 
<script src="js/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/custom.js"></script>
    
</body>
</html>