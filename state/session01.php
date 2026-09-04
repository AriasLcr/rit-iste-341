<?php
    
    session_name("gabriel");
    session_start();

    if (!empty($_SESSION['name'])) {
        // set 'name' session variable already
        // add session variable called 'school'
        $_SESSION['school'] = 'RIT';
        $_SESSION['count']++; // assuming count has been created already

        header("Location: session02.php");
        exit;
    }
?>

<html>
    <head>
        <title>Session 01</title>
        <body>
            
            <?php 
                if (isset($_SESSION['count'])) {
                    echo "<h1>Hi, you've been here {$_SESSION['count']} times</h1>";
                    $_SESSION['count']++;
                } else {
                    echo "<h1>Hi, you haven't been here before!</h1>";
                    $_SESSION['count'] = 0;
                }
                $_SESSION['name'] = "not gabriel";
            ?>

            <h2><a href="session01.php">Come Back!</a></h2>

        </body>
    </head>
</html>
