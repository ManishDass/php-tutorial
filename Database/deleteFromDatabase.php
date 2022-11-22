<?php
    $conn = mysqli_connect("localhost","root","","practice");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }
    
    $query = "DELETE FROM `user` WHERE `username`='tapas'";
    if(mysqli_query($conn, $query))
    {
        echo "Delete Data Successfully";
    }
    else
    {
        echo "Failed to Insert";
    }

    
?>