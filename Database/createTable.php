<?php
    $conn = mysqli_connect("localhost","root","","practice");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }

    $query = "CREATE TABLE php 
    (id INT(10) AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(100) NOT NULL,
    lastname VARCHAR(100) NOT NULL,
    age INT(3) NOT NULL,
    email VARCHAR(50) NOT NULL)";

    if(mysqli_query($conn,$query))
    {
        echo "Table Created Successfully";
    }
    else
    {
        echo "Error creating table: " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>