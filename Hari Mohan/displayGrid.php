<html>
<head><title>Hello Data</title></head>
<body>
<?php
$conn=new mysqli('localhost','root','','practice');//no password

$query = mysqli_query($conn, "SELECT * FROM user");

if(!$query){
die(mysqli_error($conn));
}

if (mysqli_num_rows($query) > 0)
{
echo "<table border='1'>";
echo "<th><font color='red'>Username</font></th>";
echo "<th><font color='red'>Email</font></th>";
echo "<th><font color='red'>Operation1</font></th>";
echo "<th><font color='red'>Operation2</font></th>";

while($rowdata = mysqli_fetch_assoc($query))
{
echo "<tr>";
echo "<td> $rowdata[username] </td>";
echo "<td> $rowdata[password] </td>";
echo "<td> <a href=''>Edit</></a></td>";
echo "<td> <a href=''>Delete</></a></td>";
echo "</tr>";
}

echo "</table>";
}
?>

</body>
</html>