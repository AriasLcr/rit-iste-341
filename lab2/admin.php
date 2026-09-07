<?php
    session_name('login');
    session_start();

    if (!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] !== true) {
        header('Location: login.php?msg=needlogin');
        exit;
    }

    $loginTime = isset($_COOKIE['loggedIn']);

    setcookie('loggedIn', '', time() - 3600);
    setcookie(session_name(), '', time() - 3600);

    unset($_SESSION['loggedIn']);
    session_unset();
    session_destroy();
?>

<html>
    <title>Admin Page</title>
    <body>
        <p>Hello Admin!</p>
        <p>You logged in <?php echo htmlspecialchars($loginTime); ?></p>
        <a href="login.php">Go Back</a>
    </body>
</html>