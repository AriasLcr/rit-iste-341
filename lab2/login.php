<?php 
    $username = "admin";
    $password = "password";

    date_default_timezone_set('America/New_York');

    session_name('login');
    session_start();

    if (isset($_GET['msg']) && $_GET['msg'] === 'needlogin') {
        echo "<p>You need to log in</p>";
        exit;
    }
    
    if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true){
        header("Location: admin.php");
        exit;
    } 

    // Guard case: url parameters are set incorrectly
    if (!isset($_GET['user']) || !isset($_GET['password'])) {
        echo "<p>Invalid Login</p>";
        exit;
    }

    if ($_GET['user'] === $username && $_GET['password'] === $password) {
        $_SESSION['loggedIn'] = true;
        setcookie('loggedIn', date('F j, Y g:i a'), time()+60*10);

        header("Location: admin.php");
        exit;
    }

    echo "<p>Invalid Login</p>";
    exit;
    
?>

