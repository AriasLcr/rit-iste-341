<?php
    $expire = time() + 10;
    $path = "/~gma5404/";
    $domain = "web01.gccis.rit.edu";
    $secure = false;

    setcookie("test_cookie", "grahhh!", $expire, $path, $domain, $secure);

    $counter = $_COOKIE["counter"];
    $counter++;
    setcookie("counter", $counter, $expire, $path, $domain, $secure);

    $getCounter = $_COOKIE["counter"];

    echo "<h2>counter = $counter</h2>";
    echo "<h2>\$_COOKIE variables</h2>";

    foreach ($_COOKIE as $k => $v) {
        echo "$k => $v <br />";
    }
?>
