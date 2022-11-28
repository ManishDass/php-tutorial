<?php
    setcookie("user","ManishDas",time() + (86400 * 30),'/'); //86400 means 1 Day
    echo "Cookie Value: $_COOKIE[user]";

    //to delete a cokkie
    // set the expiration date to one hour ago
    //setcookie("user", "", time() - 3600);
?>