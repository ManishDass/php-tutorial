<?php

    $conn = mysqli_connect("localhost","root","","practice");
    if(isset($_GET['submit']))
    {
        $username = $_GET['username'];
        $email = $_GET['email'];
        $password = $_GET['password'];
        $query = "INSERT INTO `user`(`username`, `email`, `password`) VALUES('$username', '$email', '$password')";

        if(mysqli_query($conn,$query))
        {
            echo "Inserted Data into Database successfully";
        }
    }

?>