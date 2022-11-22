<?php
    $conn = mysqli_connect("localhost","root","","practice");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }
    
    $query = "UPDATE `user` SET `username`='tapasghosh' WHERE `username`='tapas'";
    if(mysqli_query($conn, $query))
    {
        echo "Updated Data Successfully";
    }
    else
    {
        echo "Failed to Insert";
    }

    
?>