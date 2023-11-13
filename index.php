<!-- To see whether the user is logged in or not -->

<?php 

session_start();



if (isset($_SESSION["user_id"])) {

    $mysqli = require __DIR__ . "/db_connect.php";

    $sql = "SELECT * FROM followers
            WHERE id = {$_SESSION["user_id"]}";


    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();
}
// print_r($_SESSION);

?>

<!DOCTYPE html>
<html lang="eng">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="myStyle.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Log Page</title>
    </head>
<body>
    <div class="login-container">
        <h2>You've been logged out</h2>

        <?php if (isset($user)): ?>
            <p>Hello <?= htmlspecialchars($user["username"]) ?></p>

            <p><a href="logout.php">Logout</a></p>

        <?php else: ?>
            <p><a href="login.php">Log In</a> or <a href="registration.html">Register</a></p>

        <?php endif; ?>
    </div>
</body>
</html>
