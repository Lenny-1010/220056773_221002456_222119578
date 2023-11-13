<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- for custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

<a href="#" class="logo"><strong>Tutor</strong>Ed. </a>

    <nav class="navbar">
        <a href="home.php"> Home </a>
        <a href="home.php">About</a>
        <a href="home.php">Key Features</a>
        <a href="home.php">Tutors</a>
        <a href="home.php">Book A Session</a>
        <a href="home.php">Review</a>
        <a href="contact.php">Contact Us</a>
        <!-- <a href="registration.html">Sign Up</a> -->
        <a href="logout.php">Log Out</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</header>

<!-- header section ends -->

<!-- contact section starts   -->

<section class="contact" id="contact"> 
    
    <div class="row">

        <div class="image">
            <img src="images\contact.jpg" alt="">
        </div>

        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <!-- <?php
            if(isset($message)) {
                foreach($message as $message) {
                echo'<p class ="message">'.$message.'</p>';
            }
            }
        ?> -->
      
            <h3>Contact Us</h3>
            <input type="text"name="name" placeholder="Enter Name Here" class="box">
            <input type="email"name="email" placeholder="Enter Email Here" class="box">
            <input type="text"name="message" placeholder="Enter Message Here" class="box">
            <input type="submit" name="submit" value="Send Message" class="btn">
        </form>

    </div>

</section>

<!-- contact section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="home.php"> <i class="fas fa-chevron-right"></i> home </a>
            <a href="home.php"> <i class="fas fa-chevron-right"></i> about </a>
            <a href="home.php"> <i class="fas fa-chevron-right"></i> key features </a>
            <a href="home.php"> <i class="fas fa-chevron-right"></i> Tutors </a>
            <a href="home.php"> <i class="fas fa-chevron-right"></i> book a session </a>
            <a href="home.php"> <i class="fas fa-chevron-right"></i> review </a>
            <a href="contact.php"> <i class="fas fa-chevron-right"></i> contact us </a>
        </div>

        <div class="box">
            <h3>contactinfo</h3>
            <a href="#"> <i class="fas fa-phone"></i> +264 85 234 6543 </a>
            <a href="#"> <i class="fas fa-envelope"></i> TutorEd.@gmail.com </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> 123, Independence Avenue </a>
        </div>

        <div class="box">
            <h3>follow us</h3>  
            <a href="#"> @<strong>Tutor</strong>Ed.  </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
        </div>

    </div>

    <div class="credit"> created by <span><strong>Tutor</strong>Ed.</span> | all rights reserved </div>

</section>

<!-- footer section ends -->


<!-- js file link  -->
<script src="js/script.js"></script>

</body>
</html>