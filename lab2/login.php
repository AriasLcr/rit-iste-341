<?php 
    $username = "admin";
    $password = "password";

    date_default_timezone_set('America/New_York');

    session_name('login');
    session_start();

    // Trigger on redirect from admin.php if user is not logged in
    if (isset($_GET['msg']) && $_GET['msg'] === 'needlogin') {
        echo "<p>You need to log in</p>";
        exit;
    }
    
    // Checks session to see if the user is already logged in
    if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true){
        header("Location: admin.php");
        exit;
    } 

    // Check if url parameters are set incorrectly
    if (!isset($_GET['user']) || !isset($_GET['password'])) {
        echo "<p>Invalid Login</p>";
        exit;
    }

    // Check for credentials
    if ($_GET['user'] === $username && $_GET['password'] === $password) {
        $_SESSION['loggedIn'] = true;
        setcookie('loggedIn', date('F j, Y g:i a'), time()+60*10);

        header("Location: admin.php");
        exit;
    }
    
    // If credentials are invalid, finally alert the user that the login was invalid
    echo "<p>Invalid Login</p>";
    exit;
    
?>

