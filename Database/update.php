<html>
<head><title>Hello Data</title></head>
<body>
<?php

$conn=new mysqli('localhost','root','','practicedb');//no password

if (isset($_POST['submit'])) {

    $eid = $_POST['eid'];
    $empname = $_POST['ename'];



$sql = "UPDATE `employee` SET `empname`='$empname' WHERE `empid`='$eid'";

if (mysqli_query($conn, $sql)) {
    echo "<h3>Row Inserted</h3>";
} else {
    echo "ERROR ";
}

}

?>

</body>
</html>

<h3>Employee Update form</h3>

<form action="" method="post">
<label for="eid">New Employee name</label>
    <p><input type="name" name="ename" ></p>

<h5><label for="eid">Employee ID</label>
    <p><input type="number" name="eid" ></p>

    <p><input type="submit" name="submit" value="Submit"></p>
</form>
