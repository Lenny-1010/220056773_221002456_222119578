<!---->
<!--This home page is actually going to be the profile profile page-->
<!-- To see whether the user is logged in or not -->

<?php 

session_start();



if (isset($_SESSION["user_id"])) {

    $mysqli = require __DIR__ . "/db_connect.php";

    $sql = "SELECT * FROM students
            WHERE id = {$_SESSION["user_id"]}";


    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();
}
// print_r($_SESSION);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

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
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#features">Key Features</a>
        <a href="#tutors">Tutors</a>
        <a href="#book">Book A Session</a>
        <a href="#review">Review</a>
        <a href="contact.php">Contact Us</a>
        <a href="Logout.php">Log Out</a>
        <!-- <a href="sign_in.php">Sign In</a> -->
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="image">
        <img src="images\students.png" alt="">
    </div>

    <div class="content">
        <h3>Find your perfect tutor</h3>
        <p> Explore all the tutors available and find your perfect match for personalized learning. Book a session</p>
        <a href="#book" class="btn"> Book <span class="fas fa-chevron-right"></span> </a>
    </div>

</section>

<!-- home section ends -->

<!-- achievements section starts  -->

<section class="achievements-container">

    <div class="achievements">
        <h3>20+</h3>
        <p>Experienced Tutors</p>
    </div>

    <div class="achievements">
        <h3>100+</h3>
        <p>Students Taught</p>
    </div>

    <div class="achievements">
        <h3>24/7</h3>
        <p>Support</p>
    </div>

    <div class="achievements">
        <h3>15+</h3>
        <p>Schools</p>
    </div>

</section>

<!-- achievements section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span>about</span> us </h1>

    <div class="row">

        <div class="image">
            <img src="images\aboutUs.jpg" alt="">
        </div>

        <div class="content">
            <h3>Find the tutor of you dreams</h3>
            <p>TutorEd is a platform that connects students with skilled instructors. Students may look through tutor profiles, and tutors can offer their skills and knowledge to students, allowing them to contact each other when it is convenient for them.</p>
            <p>We provides services to both students and tutors. Students taking official board examinations such as IGCSE/GCSE, AS and A Levels, NSSCO, and others can study with trained teachers.</p>
            <a href="contact.php" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- key features section starts  -->

<section class="features" id="features">

    <h1 class="heading"> Key <span>Features</span> </h1>

    <div class="box-container">

        <div class="box">
            <h3>Qualified Tutors</h3>
            <p>We vet and onboard experienced tutors, ensuring they meet high educational standards</p>
            <a href="contact.php" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <h3>Safe and Secure</h3>
            <p>We prioritize the safety of our users, so we provide a secure online environment.</p>
            <a href="contact.php" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <h3>Expert Guidance Across Subjects</h3>
            <p>Our platform connects students with expert tutors proficient in a wide range of subjects.</p>
            <a href="contact.php" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <h3>Homework Help</h3>
            <p>Tutors provice guidance, ensuring students understand concepts and complete their assignments.</p>
            <a href="contact.php" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <h3>Language Support</h3>
            <p>Connect with tutors proficient in multiple languages, offering language learning support.</p>
            <a href="contact.php" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <h3>Exam Preparation</h3>
            <p>Tutors provide targeted strategies and practice materials, increasing exam scores.</p>
            <a href="contact.php" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

    </div>

</section>

<!-- key features section ends -->

<!-- tutors section starts  -->

<section class="tutors" id="tutors">

    <h1 class="heading"> Our <span>Tutors</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images\tutor1.png" alt="">
            <h3>Silvanus Dlamini</h3>
            <span>Physics Tutor</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-linkedin"></a>
                
            </div>
        </div>

        <div class="box">
            <img src="images\tutor2.png" alt="">
            <h3>Tulonga Nabila</h3>
            <span>Accounting Tutor</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="images\tutor3.png" alt="">
            <h3>Tunde Kapofi</h3>
            <span>Geograghy Tutor</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="images\tutor4.png" alt="">
            <h3>Tim Smith</h3>
            <span>Spanish Tutor</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="images\tutor5.png" alt="">
            <h3>Leon Chuster</h3>
            <span>French Tutor</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="images\tutor6.png" alt="">
            <h3>Simeon Harambe</h3>
            <span>History Tutor</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-linkedin"></a>
            
            </div>
        </div>
        <div class="box">
            <img src="images\tutor7.png" alt="">
            <h3>Harry Winten</h3>
            <span>Mathematics Tutor</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>    
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>
        <div class="box">
            <img src="images\tutor8.png" alt="">
            <h3>Johnna Thomas</h3>
            <span>Biology Tutor</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>
        <div class="box">
            <img src="images\tutor9.png" alt="">
            <h3>Thomas Nepembe</h3>
            <span>English Tutor</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

    </div>

</section>

<!-- tutors section ends -->

<!-- book section starts   -->

<section class="book" id="book">

    <h1 class="heading"> <span>Book A session</span> now! </h1>    

    <div class="row">

        <div class="image">
            <img src="images\bookNow.jpg" alt="">
        </div>

        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <?php
            if(isset($message)) {
                foreach($message as $message) {
                echo'<p class ="message">'.$message.'</p>';
            }
            }
        ?>
      
            <h3>Book A Session</h3>
            <input type="text"name="name" placeholder="Enter Name Here" class="box">
            <input type="text"name="subject" placeholder="Enter Subject Here" class="box">
            <input type="email"name="email" placeholder="Enter Email Here" class="box">
            <input type="date"name="date" class="box">
            <input type="submit" name="submit" value="Book now" class="btn">
        </form>

    </div>

</section>

<!-- book section ends -->

<!-- review section starts  -->

<section class="review" id="review">
    
    <h1 class="heading"> Student's <span>review</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images\review1.png" alt="">
            <h3>Anna Hander</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">I had an amazing experience using this tutoring service! The platform made it incredibly easy to find a tutor. I highly recommend.</p>
        </div>

        <div class="box">
            <img src="images\review2.png" alt="">
            <h3>Maria John</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">The tutor I found through this platform was fantastic. Thanks to their guidance, I aced my exams! I've recommended it to all my friends. </p>
        </div>

        <div class="box">
            <img src="images\review3.png" alt="">
            <h3>Sue Wednesday</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">The company truly understands the diverse needs of students. The tutors are not just knowledgeable but also caring and attentive.  I wholeheartedly recommend it to every student out there!</p>
        </div>

    </div>

</section>

<!-- review section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="#home"> <i class="fas fa-chevron-right"></i> home </a>
            <a href="#about"> <i class="fas fa-chevron-right"></i> about </a>
            <a href="#features"> <i class="fas fa-chevron-right"></i> key features </a>
            <a href="#tutors"> <i class="fas fa-chevron-right"></i> Tutors </a>
            <a href="#book"> <i class="fas fa-chevron-right"></i> book a session </a>
            <a href="#review"> <i class="fas fa-chevron-right"></i> review </a>
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

