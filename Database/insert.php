<?php
$conn = mysqli_connect("localhost", "root", "", "practice");
if ($conn === false) {
    echo "ERROR: Could not connect.";
}

if(isset($_POST['update']))
{
    $query = "INSERT INTO `user`(`username`,`email`,`password`) VALUES('$_POST[username]','$_POST[email]','$_POST[password]')";
    
    if(mysqli_query($conn, $query))
    {
        echo "<p>Successfully Inserted</p>";
    }
}
?>