<?php
    $conn = mysqli_connect("localhost","root","","practice");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }
    
    $query = "SELECT * FROM `user`";
    $data = mysqli_query($conn, $query);

    if(mysqli_num_rows($data)>0)
    {        
        while($result = mysqli_fetch_assoc($data))
        {
        echo "<h4>Username: {$result['username']} </h4>";
        echo "<p>Email: {$result['email']} </p>";
        echo "<br>";
        }
    }
    else
    {
        echo "Failed to Display";
    }

    
?>