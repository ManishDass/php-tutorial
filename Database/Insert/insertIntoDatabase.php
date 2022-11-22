<?php
    $conn = mysqli_connect("localhost","root","","practice");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }
    
    $query = "INSERT INTO `user` VALUES(2, 'tapas', 'tapas@gmail.com','tkg444')";
    if(mysqli_query($conn, $query))
    {
        echo "Inserted Data Successfully";
    }
    else
    {
        echo "Failed to Insert";
    }

    
?>