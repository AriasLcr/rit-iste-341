<?php
    
    session_name("gabriel");
    session_start();

?>

<html>
    <head>
        <title>Session 02</title>
    </head>
    <body>
        <?php 
            if (isset($_SESSION['name'])) {
                echo "Hi, {$_SESSION['name']} from {$_SESSION['school']}. <br />
                    See, I remembered your name! <br />";
                unset($_SESSION['name']);
                session_unset(); // unset all session variables

                // invalidate the session cookie
                if (isset($_COOKIE[session_name()])) {
                    $params = session_get_cookie_params();
                    setcookie(session_name(), '', 1, 
                        $params['path'], $params['domain'], 
                        $params['secure'], $params['httponly']);
                }
                session_destroy();
            } else {
                echo "<p>Sorry, I don't know you!</p>
                <a href='session01.php'>Login</a>";
            }
        ?>
    </body>
</html>
