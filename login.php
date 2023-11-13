<?php


$is_invalid = false;

    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        $mysqli = require __DIR__ . "/db_connect.php";
        
        $sql =sprintf("SELECT * FROM students
                WHERE email = '%s'",
                $mysqli->real_escape_string($_POST["email"]));
        
        $result = $mysqli->query($sql);

        $user = $result->fetch_assoc();

        // var_dump($user);
        // exit;

        if ($user) {
            
            if (password_verify($_POST["password"], $user["password_hash"])) {
                // die("Login Successful");
                
                session_start();


                session_regenerate_id();

                $_SESSION["user_id"] = $user["id"];

                // header("Location: index.php");
                header("Location: home.php");
                exit;
            }
        }

        $is_invalid = true;
    }
?>

<!DOCTYPE html>
<html lang="eng">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="register.css">
        <!-- <link rel="stylesheet" href="style.css"> -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Login</title>
    </head>
<body>

<header class="header">

<a href="#" class="logo"><strong>Tutor</strong>Ed. </a>

    <nav class="navbar">
        <a href="index.php">Home</a>
        <a href="index.php">About</a>
        <a href="index.php">Key Features</a>
        <a href="index.php">Tutors</a>
        <a href="index.php">Book A Session</a>
        <a href="index.php">Review</a>
        <a href="contact.php">Contact Us</a>
        <a href="registration.html">Sign Up</a>
        <a href="login.php">Log In</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</header>
    <!-- <div class="login-container"> -->
    <div class="register-container">
        <h2>Login</h2>
         
        <?php if ($is_invalid): ?>
            <em>Invalid Login</em>
        <?php endif; ?>

        <form method="post">
            <!-- <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br> -->

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?= htmlspecialchars ($_POST['email'] ?? "") ?>" required><br>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br>

            <!--  type="submit" onclick="redirectToDashboard()" -->
            
            
            <input type="submit" id="button" name="button"><br><br>
            
            <!-- <input type="submit" id="button" name="Log In"><br><br> -->
             <!-- <a href="login.php">
            <input type="Log In" id="button" name="button"><br><br>
        </a>

            <a href="registration.html" button >Register</button></a> -->
        </form>
        
    </div>
    
    <!-- <script>
        function redirectToDashboard() {
            window.location.href = "home.html";
        }
    </script> -->
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
</body>
</html>



