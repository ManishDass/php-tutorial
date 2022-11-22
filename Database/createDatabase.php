<?php
    $conn = mysqli_connect("localhost","root","");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }

    $query = "CREATE DATABASE demo";
    if(mysqli_query($conn,$query))
    {
        echo "Database Created Successfully";
    }
    else
    {
        echo "Error creating database: " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>