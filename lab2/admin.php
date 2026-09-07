<?php
    session_name('login');
    session_start();

    // redirect to login with error message "You need to log in"
    if (!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] !== true) {
        header('Location: login.php?msg=needlogin');
        exit;
    }

    // Set cookie to immediately expire
    setcookie('loggedIn', '', time() - 3600);
    setcookie(session_name(), '', time() - 3600);

    // unset and destroy session
    unset($_SESSION['loggedIn']);
    session_unset();
    session_destroy();
?>

<html>
    <title>Admin Page</title>
    <body>
        <p>Hello!</p>
        <?php 
            echo "<p>You logged in {$_COOKIE['loggedIn']}</p>"
        ?>
        <a href="login.php">Go Back</a>
    </body>
</html>