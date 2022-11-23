<?php

    if(isset($_GET['getsubmit']))
    {
        $username = $_GET['username'];
        $password = $_GET['password'];

        echo "Fetched Using 'GET Method' <br>"; 
        echo "Username: $username <br>";
        echo "Password: $password <br>";
    }

    if(isset($_POST['postsubmit']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        echo "Fetched Using 'POST Method' <br>"; 
        echo "Username: $username <br>";
        echo "Password: $password <br>";
    }
?>