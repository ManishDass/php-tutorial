<?php
    require("connection.php");
    $conn = makeConnection();


    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }
    
    $query = "INSERT INTO `user`(`username`, `email`, `password`) VALUES ('Vikas','vikas@yahoo.com','myfavthane')";
    if(mysqli_query($conn, $query))
    {
        echo "Inserted Data Successfully";
    }
    else
    {
        echo "Failed to Insert";
    }

    


    
?>